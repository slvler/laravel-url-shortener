<?php

declare(strict_types=1);

namespace Slvler\Cuttly;

use Illuminate\Contracts\Container\Container;
use InvalidArgumentException;
use Slvler\Cuttly\Exceptions\MissingApiKey;

class Cuttly extends CuttlyApiWrapper
{
    public array $data;

    public function __construct(Container $app)
    {
        $apiKey = $app['config']->get('cuttly.api_key');

        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $baseURL = $app['config']->get('cuttly.api_key');

        if (empty($baseURL) || ! isset($baseURL)) {
            throw new InvalidArgumentException('Invalid Cuttly API base URL.');
        }

        parent::__construct($baseURL);

        $this->key = $apiKey;
    }

    public function short(array $data): string
    {
        $this->data = $data;
        $this->data['key'] = $this->key;
        $this->data['short'] = urlencode($data['short']);
        $sendData = http_build_query($this->data);

        $response = $this->getHttpClient()->request('GET', '?'.$sendData);
        $value = new HttpResponse($response);

        return $value->getBody();
    }

    public function edit(array $data): string
    {
        $this->data = $data;
        $this->data['key'] = $this->key;
        $this->data['edit'] = $data['edit'];
        $sendData = http_build_query($this->data);

        $response = $this->getHttpClient()->request('GET', '?'.$sendData);
        $value = new HttpResponse($response);

        return $value->getBody();
    }

    public function stats(array $data): string
    {
        $this->data = $data;
        $this->data['key'] = $this->key;
        $this->data['stats'] = $data['stats'];
        $sendData = http_build_query($this->data);

        $response = $this->getHttpClient()->request('GET', '?'.$sendData);
        $value = new HttpResponse($response);

        return $value->getBody();
    }
}
