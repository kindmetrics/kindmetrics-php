<?php
namespace Kindmetrics;
class Kindmetrics
{

  /**
   * Token for the api
   *
   * @var string
   */
  protected $token;

  /**
   * client
   *
   * @var string
   */
  protected $client;

  public function __construct($token)
  {
    $this->token = $token;
    $this->client = new Client($token);
  }


  public function getDomain($id)
  {
    $response = $this->client->call("GET", "/domains/" . $id);
    if($response == null) {
      return null;
    }
    return new Domain($this->token, $id, $response->address, $response->visitors, $response->pageviews, $response->bounce, $response->track_snippet);
  }

  public function getDomains()
  {
    $response = $this->client->call("GET", "/domains");
    if($response == null) {
      return null;
    }
    return $response;
  }
}
