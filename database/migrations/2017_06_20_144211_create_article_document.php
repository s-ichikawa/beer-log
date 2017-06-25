<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->post("http://localhost:8983/solr/beer_log/schema", [
    'json' => [
        'add-field' => [
            'name' => 'name',
            'type' => 'string'
        ],
        'add-field' => [
            'name' => 'type_name',
            'type' => 'string'
        ]
    ]
]);

echo $response->getBody();