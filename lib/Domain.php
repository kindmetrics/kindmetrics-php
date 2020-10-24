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
    $this->id = $id;
    $this->address = $address;
    $this->visitors = $visitors;
    $this->pageviews = $pageviews;
    $this->bounce = $bounce;
    $this->track_snippet = $track_snippet;
  }

  public function getCurrent()
  {
    return Client::get($this->token, "/domains/" . $this->id . "/current");
  }

  public function getSources()
  {
    return Client::get($this->token, "/domains/" . $this->id . "/sources");
  }

  public function getReferrers()
  {
    return Client::get($this->token, "/domains/" . $this->id . "/referrers");
  }

  public function getCountries()
  {
    return Client::get($this->token, "/domains/" . $this->id . "/countries");
  }

  public function getEntryPages()
  {
    return Client::get($this->token, "/domains/" . $this->id . "/entry_pages");
  }

  public function getPages()
  {
    return Client::get($this->token, "/domains/" . $this->id . "/pages");
  }

  public function getGoals()
  {
    return Client::get($this->token, "/domains/" . $this->id . "/goals");
  }

}
