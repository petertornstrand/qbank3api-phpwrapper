<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
    use QBNK\QBank\API\Model\Search;
    use QBNK\QBank\API\Model\SearchResult;

    class SearchController extends ControllerAbstract
    {
    /**
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     */
    public function metadata(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/search/metadata', $parameters, $cachePolicy);

        return $result;
    }
    /**
     * Search for Media.
     *
     * in QBank
     *
     * @param Search $search Search parameters
     *
     * @return SearchResult
     */
    public function search(Search $search, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['search' => $search]),
            'headers' => [],
        ];
        $result = $this->call('v1/search', $parameters, self::METHOD_POST, $cachePolicy);
        $result = new SearchResult($result);

        return $result;
    }
    }
