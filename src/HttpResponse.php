<?php

declare(strict_types=1);

namespace Slvler\Cuttly;

class HttpResponse
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getBody()
    {
        return (string) $this->response->getBody();
    }

    public function toObject()
    {
        $body = (string) $this->response->getBody();

        return json_decode($body) ?? (object) [];
    }
}
