<?php

namespace Slvler\Cuttly;

class HttpResponse
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getBody(): string
    {
        return (string)$this->response->getBody();
    }

    public function toObject(): object
    {
        $body = (string)$this->response->getBody();

        return json_decode($body) ?? (object)[];
    }
}
