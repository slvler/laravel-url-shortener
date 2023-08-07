<?php

namespace Slvler\Cuttly;

use GuzzleHttp\Client;

class CuttlyApiWrapper
{
    private Client $httpClient;

    public function __construct(array $parameters)
    {
        $this->httpClient = new Client(
            ['base_uri' => $parameters['base_uri']]
        );
    }

    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }
}
