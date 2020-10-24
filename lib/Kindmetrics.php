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
  }


  public function getDomain($id)
  {
    $response = Client::get($this->token, "/domains/" . $id);
    if(is_null($response)) {
      return null;
    }
    return new Domain($this->token, $id, $response->address, $response->visitors, $response->pageviews, $response->bounce, $response->track_snippet);
  }

  public function getDomains()
  {
    $response = Client::get($this->token, "/domains");
    if($response == null) {
      return null;
    }
    return $response;
  }
}
