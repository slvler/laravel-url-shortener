<?php

namespace Slvler\Cuttly;

use Illuminate\Contracts\Container\Container;


class Cuttly extends CuttlyApiWrapper
{
    public array $data;

    public function __construct(Container $app)
    {
        parent::__construct(
            [
                'base_uri' => $app['config']->get('cuttly.base_uri')
            ]
        );

        $this->key = $app['config']->get('cuttly.api_key');

    }

    public function short(array $data): string
    {
        $this->data = $data;
        $this->data['key'] = $this->key;
        $this->data['short'] = urlencode($data['short']);
        $sendData = http_build_query($this->data);

        $response = $this->getHttpClient()->request('GET','?'.$sendData);
        $value =  new HttpResponse($response);
        return $value->getBody();
    }

    public function edit(array $data): string
    {
        $this->data = $data;
        $this->data['key'] = $this->key;
        $this->data['edit'] = $data['edit'];
        $sendData = http_build_query($this->data);

        $response = $this->getHttpClient()->request('GET','?'.$sendData);
        $value =  new HttpResponse($response);
        return $value->getBody();
    }


    public function stats(array $data): string
    {
        $this->data = $data;
        $this->data['key'] = $this->key;
        $this->data['stats'] = $data['stats'];
        $sendData = http_build_query($this->data);

        $response = $this->getHttpClient()->request('GET','?'.$sendData);
        $value =  new HttpResponse($response);
        return $value->getBody();
    }

}
