<?php

namespace QBNK\QBank\API;

use CommerceGuys\Guzzle\Plugin\Oauth2\GrantType\PasswordCredentials;
use CommerceGuys\Guzzle\Plugin\Oauth2\GrantType\RefreshToken;
use CommerceGuys\Guzzle\Plugin\Oauth2\Oauth2Plugin;
use Doctrine\Common\Cache\Cache;
use Guzzle\Http\Client;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use \QBNK\QBank\API\Controller\Oauth2Controller;
use \QBNK\QBank\API\Controller\MoodboardsController;
use \QBNK\QBank\API\Controller\CategoriesController;
use \QBNK\QBank\API\Controller\FoldersController;
use \QBNK\QBank\API\Controller\MediaController;
use \QBNK\QBank\API\Controller\TemplatesController;
use \QBNK\QBank\API\Controller\AccountsController;
use \QBNK\QBank\API\Controller\SearchController;
use \QBNK\QBank\API\Controller\DeploymentController;
use \QBNK\QBank\API\Controller\FiltersController;


class QBankApi {

	/** @var string */
	protected $basePath;

	/** @var \QBNK\QBank\API\QBankCredentials */
	protected $credentials;

	/** @var \Guzzle\Http\Client */
	protected $client;

	/** @var \CommerceGuys\Guzzle\Plugin\Oauth2\Oauth2Plugin */
	protected $oauth2Plugin;

	/** @var  \Doctrine\Common\Cache\Cache */
	protected $cache;

	/** @var  QBankCachePolicy */
    protected $cachePolicy;

	/** @var  \Psr\Log\LoggerInterface */
	protected $logger;

	/** @var \QBNK\QBank\API\Controller\Oauth2Controller */
	protected $oauth2;

	/** @var \QBNK\QBank\API\Controller\MoodboardsController */
	protected $moodboards;

	/** @var \QBNK\QBank\API\Controller\CategoriesController */
	protected $categories;

	/** @var \QBNK\QBank\API\Controller\FoldersController */
	protected $folders;

	/** @var \QBNK\QBank\API\Controller\MediaController */
	protected $media;

	/** @var \QBNK\QBank\API\Controller\TemplatesController */
	protected $templates;

	/** @var \QBNK\QBank\API\Controller\AccountsController */
	protected $accounts;

	/** @var \QBNK\QBank\API\Controller\SearchController */
	protected $search;

	/** @var \QBNK\QBank\API\Controller\DeploymentController */
	protected $deployment;

	/** @var \QBNK\QBank\API\Controller\FiltersController */
	protected $filters;

	

	/**
	 * @param string $qbankURL The URL to the QBank API.
	 * @param QBankCredentials $credentials The credentials used to connect.
	 * @param array $options Associative array containing options.
	 * <ul>
	 * <li> Cache $options[cache] A cache implementation to store tokens in. Highly recommended.</li>
	 * <li> QBankCachePolicy $options[cachePolicy] A policy on how to use caching for API queries,
	 *      if not provided cache will not be available for API queries.</li>
	 * <li> LoggerInterface $options[log] A PSR-3 log implementation.</li>
	 * </ul>
	 */
	public function __construct($qbankURL, QBankCredentials $credentials, array $options = array()) {
		// Setup logging
		if (!empty($options['log']) && $options['log'] instanceof LoggerInterface) {
			$this->logger = $options['log'];
		} else {
			$this->logger = new NullLogger();
		}

		// Build basepath
		if (preg_match('/^(.*:)?\/\//', $qbankURL) === 0) {
			$qbankURL = '//'.$qbankURL;
		}
		$urlParts = parse_url($qbankURL);
		if (empty($urlParts['scheme'])) {
			$urlParts['scheme'] = 'http';
		}
		if ((empty($urlParts['path']) || $urlParts['path'] == '/')
			&& substr($urlParts['host'], -strlen('qbank.se')) == 'qbank.se') {
			$urlParts['path'] = '/api/';
		}
		if (substr($urlParts['path'], -1) != '/') {
			$urlParts['path'] .= '/';
		}
		$this->basePath = $urlParts['scheme'].'://'.$urlParts['host'].$urlParts['path'];

		// Store credentials for later use
		$this->credentials = $credentials;

		// Optionaly setup cache
		if (!empty($options['cache']) && $options['cache'] instanceOf Cache) {
			$this->cache = $options['cache'];
			if (!$this->cache->getNamespace()) {
				$this->cache->setNamespace(md5($this->basePath.$this->credentials->getUsername()));
			}
		} else {
			$this->logger->notice('No caching supplied! Without caching the user credentials will have to be sent anew for each instance of QBankApi');
		}

		if (!empty($options['cachePolicy']) && $options['cachePolicy'] instanceOf QBankCachePolicy) {
            $this->cachePolicy = $options['cachePolicy'];
            if (!($this->cache instanceOf Cache) && $this->cachePolicy->isEnabled()) {
                throw new \LogicException('You have supplied a cache policy that says cache is enabled but no cache provider have been defined.');
            }
        } else {
            $this->cachePolicy = new QBankCachePolicy(false, 0);
            $this->logger->warning('No cache policy supplied! Without a cache policy no API queries will be cached.');
        }
	}

	/**
	* @return \QBNK\QBank\API\Controller\Oauth2Controller
	*/
	public function oauth2() {
		if (!$this->oauth2 instanceof Oauth2Controller) {
			$this->oauth2 = new Oauth2Controller($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->oauth2->setLogger($this->logger);
		}
		return $this->oauth2;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\MoodboardsController
	*/
	public function moodboards() {
		if (!$this->moodboards instanceof MoodboardsController) {
			$this->moodboards = new MoodboardsController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->moodboards->setLogger($this->logger);
		}
		return $this->moodboards;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\CategoriesController
	*/
	public function categories() {
		if (!$this->categories instanceof CategoriesController) {
			$this->categories = new CategoriesController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->categories->setLogger($this->logger);
		}
		return $this->categories;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\FoldersController
	*/
	public function folders() {
		if (!$this->folders instanceof FoldersController) {
			$this->folders = new FoldersController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->folders->setLogger($this->logger);
		}
		return $this->folders;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\MediaController
	*/
	public function media() {
		if (!$this->media instanceof MediaController) {
			$this->media = new MediaController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->media->setLogger($this->logger);
		}
		return $this->media;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\TemplatesController
	*/
	public function templates() {
		if (!$this->templates instanceof TemplatesController) {
			$this->templates = new TemplatesController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->templates->setLogger($this->logger);
		}
		return $this->templates;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\AccountsController
	*/
	public function accounts() {
		if (!$this->accounts instanceof AccountsController) {
			$this->accounts = new AccountsController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->accounts->setLogger($this->logger);
		}
		return $this->accounts;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\SearchController
	*/
	public function search() {
		if (!$this->search instanceof SearchController) {
			$this->search = new SearchController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->search->setLogger($this->logger);
		}
		return $this->search;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\DeploymentController
	*/
	public function deployment() {
		if (!$this->deployment instanceof DeploymentController) {
			$this->deployment = new DeploymentController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->deployment->setLogger($this->logger);
		}
		return $this->deployment;
	}
	
	/**
	* @return \QBNK\QBank\API\Controller\FiltersController
	*/
	public function filters() {
		if (!$this->filters instanceof FiltersController) {
			$this->filters = new FiltersController($this->getConnection(), $this->cachePolicy, $this->cache);
			$this->filters->setLogger($this->logger);
		}
		return $this->filters;
	}
	
	

	protected function getConnection() {
		if (!($this->client instanceof Client)) {
			$oauthClient = new Client($this->basePath.'oauth2/token');
			$this->oauth2Plugin = new Oauth2Plugin(
				new PasswordCredentials(
					$oauthClient,
					array(
						'username' => $this->credentials->getUsername(),
						'password' => $this->credentials->getPassword(),
						'client_id' => $this->credentials->getClientId()
					)
				),
				new RefreshToken(
					$oauthClient,
					array(
						'client_id' => $this->credentials->getClientId()
					)
				)
			);
			if ($this->cache instanceof Cache && $this->cache->contains('access_token')) {
				$this->oauth2Plugin->setAccessToken($this->cache->fetch('access_token'));
			}
			if ($this->cache instanceof Cache && $this->cache->contains('refresh_token')) {
				$this->oauth2Plugin->setRefreshToken($this->cache->fetch('refresh_token'));
			}
			$this->client = new Client($this->basePath);
			$this->client->addSubscriber($this->oauth2Plugin);
			$this->client->setDefaultOption('headers', array('Accept' => 'application/json'));
			$this->client->setUserAgent('QBank-API-PHP-Wrapper', true);
			$this->logger->debug(
				'Guzzle client instantiated.',
				array(
					'basepath' => $this->basePath,
					'accesstoken' => $this->oauth2Plugin->getAccessToken(),
					'refreshtoken' => $this->oauth2Plugin->getRefreshToken()
				)
			);
		}

		return $this->client;
	}

	public function __destruct() {
		if ($this->cache instanceof Cache && $this->oauth2Plugin instanceof Oauth2Plugin) {
			$this->cache->save('access_token', $this->oauth2Plugin->getAccessToken());
			$this->cache->save('refresh_token', $this->oauth2Plugin->getRefreshToken());
		}
	}
}