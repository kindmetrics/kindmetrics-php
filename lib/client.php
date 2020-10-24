<?php
namespace Kindmetrics;
require "./vendor/autoload.php";

class Client
{

  const API_URL = "https://app.kindmetrics.io/api";

  static public function get($token, $path)
  {
    $response = \Httpful\Request::get(self::API_URL . $path)
                       ->addHeader("Authorization", 'Bearer ' . $token)
                       ->addHeader("Accept", 'application/json')
                       ->expectsJson()
                       ->send();
     return json_decode($response);
  }

  static public function post($token, $path, $parameters)
  {
    $response = \Httpful\Request::post(self::API_URL . $path)
                       ->addHeader("Authorization", 'Bearer ' . $token)
                       ->addHeader("User-Agent", 'kindmetrics-php')
                       ->addHeader("Accept", 'application/json')
                       ->expectsJson()
                       ->send();
    return json_decode($response);
  }
}
?>
