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
    $clientData = $this->client->call("GET", "/domains/" . $id);
    if($clientData == null) {
      return null;
    }
    $response = $clientData;
    return new Domain($this->token, $id, $response->address, $response->time_zone, $response->visitors, $response->pageviews, $response->bounce, $response->track_snippet);
  }

  public function getDomains()
  {
    $clientData = $this->client->call("GET", "/domains");
    if($clientData == null) {
      return null;
    }
    $response = $clientData;
    return $response;
  }
}
