<?php
namespace Kindmetrics;
require "./vendor/autoload.php";

class Client
{
  protected $client;
  protected $token;

  const API_URL = "https://app.kindmetrics.io/api";

  public function __construct($token)
  {
    $this->token = $token;
    $this->client = new \GuzzleHttp\Client();
  }

  public function call($method, $path)
  {
    $response = $this->client->request($method, self::API_URL . $path, [
        'headers' => [
            'User-Agent' => 'kindmetrics-php/1.0',
            'Authorization' => 'Bearer ' . $this->token
        ]
    ]);
    if($response->getStatusCode() >= 300) {
      return null;
    }

    return json_decode($response->getBody());
  }
}
?>
