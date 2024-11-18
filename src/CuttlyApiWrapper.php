<?php

declare(strict_types=1);

namespace Slvler\Cuttly;

use GuzzleHttp\Client;

class CuttlyApiWrapper
{
    private Client $httpClient;

    public function __construct($baseUrl)
    {
        $this->httpClient = new Client([
            'base_uri' => $baseUrl,
        ]
        );
    }

    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }
}
