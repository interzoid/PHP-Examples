<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

// Create an http client
$client = new \GuzzleHttp\Client();

// Call the API and store response
$response = $client->request('GET', 'https://api.interzoid.com/getcompanymatchadvanced?license=YOURAPIKEY&company=ibm&algorithm=wide');

// show response status code
echo $response->getStatusCode();

// show response data
echo $response->getBody();
