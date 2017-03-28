<?php

namespace QBNK\QBank\API\Model;

class SearchResult  implements \JsonSerializable , \Countable, \Iterator, \ArrayAccess
{
    /** @var int Number of hits per page in the SearchResult */
    protected $limit;

    /** @var int Starting position of SearchResult */
    protected $offset;

    /** @var MediaResponse[] An array of Media matching the search */
    protected $results;

    /** @var float Time spent searching */
    protected $timeSearching;

    /** @var int Total number of hits */
    protected $totalHits;

    /**
     * Constructs a SearchResult.
     *
     * @param array $parameters An array of parameters to initialize the {@link SearchResult} with.
     * - <b>limit</b> - Number of hits per page in the SearchResult
     * - <b>offset</b> - Starting position of SearchResult
     * - <b>results</b> - An array of Media matching the search
     * - <b>timeSearching</b> - Time spent searching
     * - <b>totalHits</b> - Total number of hits
     */
    public function __construct($parameters = [])
    {
        $this->results = [];

        if (isset($parameters['limit'])) {
            $this->setLimit($parameters['limit']);
        }
        if (isset($parameters['offset'])) {
            $this->setOffset($parameters['offset']);
        }
        if (isset($parameters['results'])) {
            $this->setResults($parameters['results']);
        }
        if (isset($parameters['timeSearching'])) {
            $this->setTimeSearching($parameters['timeSearching']);
        }
        if (isset($parameters['totalHits'])) {
            $this->setTotalHits($parameters['totalHits']);
        }
    }

    /**
     * Gets the limit of the SearchResult.
     * @return int	 */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets the "limit" of the SearchResult.
     *
     * @param int $limit
     *
     * @return SearchResult
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
    /**
     * Gets the offset of the SearchResult.
     * @return int	 */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets the "offset" of the SearchResult.
     *
     * @param int $offset
     *
     * @return SearchResult
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }
    /**
     * Gets the results of the SearchResult.
     * @return MediaResponse[]	 */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Sets the "results" of the SearchResult.
     *
     * @param MediaResponse[] $results
     *
     * @return SearchResult
     */
    public function setResults(array $results)
    {
        $this->results = [];

        foreach ($results as $item) {
            $this->addMediaResponse($item);
        }

        return $this;
    }

    /**
     * Adds an object of "Results" of the SearchResult.
     *
     * @param MediaResponse|array $item
     *
     * @return SearchResult
     */
    public function addMediaResponse($item)
    {
        if (!($item instanceof MediaResponse)) {
            if (is_array($item)) {
                try {
                    $item = new MediaResponse($item);
                } catch (\Exception $e) {
                    trigger_error('Could not auto-instantiate MediaResponse. '.$e->getMessage(), E_USER_WARNING);
                }
            } elseif (!is_numeric($item)) {
                trigger_error('Array parameter item is not of expected type "MediaResponse"!', E_USER_WARNING);
            }
        }

        $this->results[] = $item;

        return $this;
    }
    /**
     * Gets the timeSearching of the SearchResult.
     * @return float	 */
    public function getTimeSearching()
    {
        return $this->timeSearching;
    }

    /**
     * Sets the "timeSearching" of the SearchResult.
     *
     * @param float $timeSearching
     *
     * @return SearchResult
     */
    public function setTimeSearching($timeSearching)
    {
        $this->timeSearching = $timeSearching;

        return $this;
    }
    /**
     * Gets the totalHits of the SearchResult.
     * @return int	 */
    public function getTotalHits()
    {
        return $this->totalHits;
    }

    /**
     * Sets the "totalHits" of the SearchResult.
     *
     * @param int $totalHits
     *
     * @return SearchResult
     */
    public function setTotalHits($totalHits)
    {
        $this->totalHits = $totalHits;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return count($this->results);
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return current($this->results);
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return key($this->results);
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        next($this->results);
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        reset($this->results);
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return isset($this->results[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->results[$offset] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->results[] = $value;
        } else {
            $this->results[$offset] = $value;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        unset($this->results[$offset]);
    }

    /**
     * Gets all data that should be available in a json representation.
     *
     * @return array An associative array of the available variables.
     */
    public function jsonSerialize()
    {
        $json = [];

        if ($this->limit !== null) {
            $json['limit'] = $this->limit;
        }
        if ($this->offset !== null) {
            $json['offset'] = $this->offset;
        }
        if ($this->results !== null && !empty($this->results)) {
            $json['results'] = $this->results;
        }
        if ($this->timeSearching !== null) {
            $json['timeSearching'] = $this->timeSearching;
        }
        if ($this->totalHits !== null) {
            $json['totalHits'] = $this->totalHits;
        }

        return $json;
    }
}
