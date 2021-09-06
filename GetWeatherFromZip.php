<?php
// Get your API key at www.interzoid.com/register

require 'vendor/autoload.php';

use GuzzleHttp\Client;

// Create an http client
$client = new \GuzzleHttp\Client();

// Call the API and store response
$response = $client->request('GET', 'https://api.interzoid.com/getweatherzipcode?license=YOURAPIKEY&zip=94111e');

// show response status code
echo $response->getStatusCode();

// show response data
echo $response->getBody();
