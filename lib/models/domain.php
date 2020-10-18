<?php
namespace Kindmetrics;
class Domain
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


  /**
   * The domain address
   *
   * @var string
   */
  public $address;

  /**
   * The domain id
   *
   * @var integer
   */
  public $id;

  /**
   * The domain visitors
   *
   * @var integer
   */
  public $visitors;

  /**
   * The domain pageviews
   *
   * @var integer
   */
  public $pageviews;

  /**
   * The domain bounce rate
   *
   * @var integer
   */
  public $bounce;


  public function __construct($token, $id, $address, $visitors, $pageviews, $bounce, $track_snippet)
  {
    $this->token = $token;
    $this->client = new Client($token);

    $this->id = $id;
    $this->address = $address;
    $this->visitors = $visitors;
    $this->pageviews = $pageviews;
    $this->bounce = $bounce;
    $this->track_snippet = $track_snippet;
  }

  public function getSources()
  {
    $this->client->call("GET", "/domains/" . $this->id . "/sources");
  }

  public function getReferrers()
  {
    $this->client->call("GET", "/domains/" . $this->id . "/referrers");
  }

  public function getCountries()
  {
    $this->client->call("GET", "/domains/" . $this->id . "/countries");
  }

  public function getEntryPages()
  {
    $this->client->call("GET", "/domains/" . $this->id . "/entry_pages");
  }

  public function getPages()
  {
    $this->client->call("GET", "/domains/" . $this->id . "/pages");
  }

  public function getGoals()
  {
    $this->client->call("GET", "/domains/" . $this->id . "/goals");
  }

}
