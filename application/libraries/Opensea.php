<?php

use GuzzleHttp\Client;

class Opensea{

    protected $api_key = '2f90ccaf248549889b97386e5033798d';

    public function get_collection($params)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/collections', [
            'headers' => [
                'Accept' => 'application/json',
                'X-API-KEY' => $this->api_key,
            ],
            'query'   => $params['query']

        ]);
        $data = $response->getBody();
        $read_json = json_decode($data, true);

        usort($read_json, function ($a, $b) {
            return $a['name'] <=> $b['name'];
        });

        return ($read_json);
    }

    public function get_collection_detail($slug)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/collection/'. $slug, [
            'headers' => [
                'X-API-KEY' => $this->api_key,
            ],
        ]);

        $data = $response->getBody();
        $read_json = json_decode($data, true);

        return ($read_json);
    }

}
