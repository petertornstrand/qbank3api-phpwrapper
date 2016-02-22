<?php

namespace QBNK\QBank\API;

use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\CacheProvider;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use QBNK\GuzzleOAuth2\GrantType\PasswordCredentials;
use QBNK\GuzzleOAuth2\GrantType\RefreshToken;
use QBNK\GuzzleOAuth2\OAuth2Subscriber;
use QBNK\GuzzleOAuth2\TokenData;
use QBNK\QBank\API\Controller\AccountsController;
use QBNK\QBank\API\Controller\CategoriesController;
use QBNK\QBank\API\Controller\DeploymentController;
use QBNK\QBank\API\Controller\EventsController;
use QBNK\QBank\API\Controller\FiltersController;
use QBNK\QBank\API\Controller\FoldersController;
use QBNK\QBank\API\Controller\MediaController;
use QBNK\QBank\API\Controller\MoodboardsController;
use QBNK\QBank\API\Controller\ObjecttypesController;
use QBNK\QBank\API\Controller\PropertysetsController;
use QBNK\QBank\API\Controller\SearchController;
use QBNK\QBank\API\Controller\TemplatesController;

/**
 * This is the main class to instantiate and use when communicating with QBank.
 *
 * All the different parts of the API are accessible via the methods which are returning controllers.
 *
 * Built against QBank API v.1 and Swagger v.1.1
 */
class QBankApi
{
    /** @var LoggerInterface */
    protected $logger;

    /** @var string */
    protected $basepath;

    /** @var Credentials */
    protected $credentials;

    /** @var Cache|null */
    protected $cache;

    /** @var CachePolicy */
    protected $cachePolicy;

    /** @var Client */
    protected $client;

    /** @var OAuth2Subscriber */
    protected $oauth2Subscriber;

    /** @var AccountsController */
    protected $accounts;

    /** @var CategoriesController */
    protected $categories;

    /** @var DeploymentController */
    protected $deployment;

    /** @var EventsController */
    protected $events;

    /** @var FiltersController */
    protected $filters;

    /** @var FoldersController */
    protected $folders;

    /** @var MediaController */
    protected $media;

    /** @var MoodboardsController */
    protected $moodboards;

    /** @var ObjecttypesController */
    protected $objecttypes;

    /** @var PropertysetsController */
    protected $propertysets;

    /** @var SearchController */
    protected $search;

    /** @var TemplatesController */
    protected $templates;

    /**
     * @param string $qbankURL The URL to the QBank API.
     * @param Credentials $credentials The credentials used to connect.
     * @param array $options Associative array containing options.
     * <ul>
     * <li>Cache $options[cache] A cache implementation to store tokens and responses in. Highly recommended.</li>
     * <li>QBankCachePolicy $options[cachePolicy] A policy on how to use caching for API queries, if not provided cache will not be available for API queries.</li>
     * <li>LoggerInterface $options[log] A PSR-3 log implementation.</li>
     * </ul>
     */
    public function __construct($qbankURL, Credentials $credentials, array $options = [])
    {
        // Setup logging
        if (!empty($options['log']) && $options['log'] instanceof LoggerInterface) {
            $this->logger = $options['log'];
        } else {
            $this->logger = new NullLogger();
        }

        $this->basepath = $this->buildBasepath($qbankURL);

        // Store credentials for later use
        $this->credentials = $credentials;

        // Optionaly setup cache
        if (!empty($options['cache']) && $options['cache'] instanceof Cache) {
            $this->cache = $options['cache'];
            if ($this->cache instanceof CacheProvider && !$this->cache->getNamespace()) {
                $this->cache->setNamespace(md5($this->basepath.$this->credentials->getUsername().$this->credentials->getPassword()));
            }
        } else {
            $this->logger->notice('No caching supplied! Without caching both performance and security is reduced.');
        }

        // Setup the cache policy
        if (!empty($options['cachePolicy']) && $options['cachePolicy'] instanceof CachePolicy) {
            $this->cachePolicy = $options['cachePolicy'];
            if (!($this->cache instanceof Cache) && $this->cachePolicy->isEnabled()) {
                throw new \LogicException(
                    'You have supplied a cache policy that says cache is enabled but no cache provider have been defined.'
                );
            }
        } else {
            $this->cachePolicy = new CachePolicy(false, 0);
            $this->logger->warning('No cache policy supplied! Without a cache policy no API queries will be cached.');
        }
    }

    /**
     * Accounts control the security in QBank.
     *
     * @return AccountsController
     */
    public function accounts()
    {
        if (!$this->accounts instanceof AccountsController) {
            $this->accounts = new AccountsController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->accounts->setLogger($this->logger);
        }

        return $this->accounts;
    }
    /**
     * Categories defines which PropertySets should be available for Media. All Media belongs to exactly one Category.
     *
     * @return CategoriesController
     */
    public function categories()
    {
        if (!$this->categories instanceof CategoriesController) {
            $this->categories = new CategoriesController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->categories->setLogger($this->logger);
        }

        return $this->categories;
    }
    /**
     * DeploymentSites are places where Media from QBank may be published to, to allow public access. Protocols define the way the publishing executes.
     *
     * @return DeploymentController
     */
    public function deployment()
    {
        if (!$this->deployment instanceof DeploymentController) {
            $this->deployment = new DeploymentController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->deployment->setLogger($this->logger);
        }

        return $this->deployment;
    }
    /**
     * Class Events.
     *
     * @return EventsController
     */
    public function events()
    {
        if (!$this->events instanceof EventsController) {
            $this->events = new EventsController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->events->setLogger($this->logger);
        }

        return $this->events;
    }
    /**
     * Filters are used for filtering media by its folder, category or a specific property.
     *
     * @return FiltersController
     */
    public function filters()
    {
        if (!$this->filters instanceof FiltersController) {
            $this->filters = new FiltersController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->filters->setLogger($this->logger);
        }

        return $this->filters;
    }
    /**
     * Folders are used to group Media in a hierarchial manner.
     *
     * @return FoldersController
     */
    public function folders()
    {
        if (!$this->folders instanceof FoldersController) {
            $this->folders = new FoldersController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->folders->setLogger($this->logger);
        }

        return $this->folders;
    }
    /**
     * A Media is any uploaded file in QBank. A Media belongs to a Category and may have customer defined Properties.
     *
     * @return MediaController
     */
    public function media()
    {
        if (!$this->media instanceof MediaController) {
            $this->media = new MediaController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->media->setLogger($this->logger);
        }

        return $this->media;
    }
    /**
     * Moodboards are public, usually temporary, areas used to expose Media in QBank. Any Media may be added to a Moodboard, which any outside user may then access until the Moodboard expiration date is due. Moodboards can be templated in different ways to fit many purposes.
     *
     * @return MoodboardsController
     */
    public function moodboards()
    {
        if (!$this->moodboards instanceof MoodboardsController) {
            $this->moodboards = new MoodboardsController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->moodboards->setLogger($this->logger);
        }

        return $this->moodboards;
    }
    /**
     * Object types define sets of propertySets that can be applied to any Object of the corresponding object type class, such as a Media or a Folder.
     *
     * @return ObjecttypesController
     */
    public function objecttypes()
    {
        if (!$this->objecttypes instanceof ObjecttypesController) {
            $this->objecttypes = new ObjecttypesController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->objecttypes->setLogger($this->logger);
        }

        return $this->objecttypes;
    }
    /**
     * PropertySets groups Properties together.
     *
     * @return PropertysetsController
     */
    public function propertysets()
    {
        if (!$this->propertysets instanceof PropertysetsController) {
            $this->propertysets = new PropertysetsController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->propertysets->setLogger($this->logger);
        }

        return $this->propertysets;
    }
    /**
     * @return SearchController
     */
    public function search()
    {
        if (!$this->search instanceof SearchController) {
            $this->search = new SearchController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->search->setLogger($this->logger);
        }

        return $this->search;
    }
    /**
     * @return TemplatesController
     */
    public function templates()
    {
        if (!$this->templates instanceof TemplatesController) {
            $this->templates = new TemplatesController($this->getClient(), $this->cachePolicy, $this->cache);
            $this->templates->setLogger($this->logger);
        }

        return $this->templates;
    }

    /**
     * Create a basepath for all api calls from the supplied URL.
     *
     * @param string $url
     *
     * @return string
     */
    protected function buildBasepath($url)
    {
        if (!preg_match('#(\w+:)?//#', $url)) {
            $url = '//'.$url;
        }

        $urlParts = parse_url($url);

        if ($urlParts === false) {
            throw new \InvalidArgumentException('Could not parse QBank URL.');
        }

        // Default to HTTP
        if (empty($urlParts['scheme'])) {
            $urlParts['scheme'] = 'http';
        }

        // Add the api path automattically if ommitted for qbank.se hosted QBank instances
        if ((empty($urlParts['path']) || $urlParts['path'] == '/')
            && substr($urlParts['host'], -strlen('qbank.se')) == 'qbank.se') {
            $urlParts['path'] = '/api/';
        }

        // Pad the end of the path with a slash
        if (substr($urlParts['path'], -1) != '/') {
            $urlParts['path'] .= '/';
        }

        return $urlParts['scheme'].'://'.$urlParts['host'].(!empty($urlParts['port']) ? ':'.$urlParts['port'] : '').$urlParts['path'];
    }

    /**
     * Gets the Guzzle client instance used for making calls.
     *
     * @return Client
     */
    protected function getClient()
    {
        if (!($this->client instanceof Client)) {
            $this->client = new Client([
                'base_url' => $this->basepath,
                'defaults' => [
                    'headers' => [
                        'Accept'       => 'application/json',
                        'Content-type' => 'application/json',
                        'User-Agent'   => 'qbank3api-phpwrapper/1 (qbankapi: 1; swagger: 1.1)',
                    ],
                ],
            ]);
            $this->client->getEmitter()->attach($this->getOAuth2Subscriber());
            $this->logger->debug('Guzzle client instantiated.', ['basepath' => $this->basepath]);
        }

        return $this->client;
    }

    /**
     * Gets the instance of the OAuth2 subscriber.
     *
     * @return OAuth2Subscriber
     */
    protected function getOAuth2Subscriber()
    {
        if (!($this->oauth2Subscriber instanceof OAuth2Subscriber)) {
            $client                 = new Client(['base_url' => $this->basepath.'oauth2/token']);
            $this->oauth2Subscriber = new OAuth2Subscriber(
                new PasswordCredentials(
                    $client,
                    [
                        'client_id' => $this->credentials->getClientId(),
                        'username'  => $this->credentials->getUsername(),
                        'password'  => $this->credentials->getPassword(),
                    ]
                ),
                new RefreshToken($client, ['client_id' => $this->credentials->getClientId()])
            );
            $this->oauth2Subscriber->tokenPersistence(function ($method, TokenData $token = null) {
                switch ($method) {
                    case 'get':
                        return $this->getToken();
                        break;
                    case 'set':
                        $this->setCachedToken($token);
                        break;
                    case 'delete':
                        $this->invalidateCachedToken();
                        break;
                }

                return;
            });
        }

        return $this->oauth2Subscriber;
    }

    /**
     * Changes the credentials used to authenticate with QBank.
     *
     * Changing the credentials will effectively switch the user using QBank and is useful when implementing some tiered
     * service.
     *
     * @param string $user Username of the new user.
     * @param string $password Password of the new user.
     *
     * @return void
     */
    public function updateCredentials($user, $password)
    {
        $oldUser           = $this->credentials->getUsername();
        $this->credentials = new Credentials($this->credentials->getClientId(), $user, $password);
        unset($password);
        if ($this->client instanceof Client) {
            $this->client->getEmitter()->detach($this->oauth2Subscriber);
            $this->oauth2Subscriber = null;
            $this->client->getEmitter()->attach($this->getOAuth2Subscriber());
        }
        if ($this->cache instanceof CacheProvider) {
            $this->cache->setNamespace(md5($this->basepath.$this->credentials->getUsername().$this->credentials->getPassword()));
        }
        $this->logger->notice('Updated user!', ['old' => $oldUser, 'new' => $user]);
    }

    /**
     * Sets the token used for authentication.
     *
     * This is normally done automatically, but exposed for transparency reasons.
     *
     * @param TokenData $token The token set.
     *
     * @return void
     */
    public function setCachedToken(TokenData $token)
    {
        if ($this->cache instanceof Cache) {
            $this->cache->save('oauth2token', serialize($token), 3600 * 24 * 13);
        }
    }

    /**
     * Gets the token used for authentication.
     *
     * @return TokenData|null Returns the token if it exists, null if not.
     */
    public function getToken()
    {
        $token = new TokenData();
        if ($this->oauth2Subscriber instanceof OAuth2Subscriber) {
            $token = $this->oauth2Subscriber->getTokenData();
        }
        if (!$token->accessToken && $this->cache instanceof Cache && $this->cache->contains('oauth2token')) {
            $token = unserialize($this->cache->fetch('oauth2token'));
        }
        if (!$token->accessToken) {
            $response = $this->getClient()->get('/');
            if ($response->getStatusCode() == 200) {
                $token = $this->oauth2Subscriber->getTokenData();
            }
        }

        return $token->accessToken ? $token : null;
    }

    /**
     * Invalidates the token used for authentication.
     *
     * This is normally done automatically, but exposed for transparency reasons.
     *
     * @return void
     */
    public function invalidateCachedToken()
    {
        if ($this->cache instanceof Cache) {
            $this->cache->delete('oauth2token');
        }
    }
}
