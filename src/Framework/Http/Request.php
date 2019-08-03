<?php declare(strict_types=1);

namespace Framework\Http;

class Request
{
    private $queryParams, $parsedBody;

    public function __construct(array $queryParams = [], $parsedBody = null)
    {
        list($this->queryParams, $this->parsedBody) = [$queryParams, $parsedBody];
    }

    /**
     * @return array a-la GET
     */
    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    /**
     * a-la POST
     * @return array|null
     */
    public function getParsedBody()/*: array*/
    {
        return $this->parsedBody;
    }
}