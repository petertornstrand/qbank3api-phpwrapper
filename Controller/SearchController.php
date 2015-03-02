<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\Search;
use QBNK\QBank\API\Model\SearchResult;

class SearchController extends ControllerAbstract
{
    /**
     *
     */
    public function metadata()
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/search/metadata', $parameters);

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
    public function search(Search $search)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['search' => $search]),
            'headers' => [],
        ];
        $result = $this->post('v1/search', $parameters);
        $result = new SearchResult($result);

        return $result;
    }
}
