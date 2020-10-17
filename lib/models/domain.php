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
   * The domain time zone
   *
   * @var string
   */
  public $timeZone;

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


  public function __construct($token, $id, $address, $timeZone, $visitors, $pageviews, $bounce, $track_snippet)
  {
    $this->token = $token;
    $this->id = $id;
    $this->address = $address;
    $this->timeZone = $timeZone;
    $this->visitors = $visitors;
    $this->pageviews = $pageviews;
    $this->bounce = $bounce;
    $this->track_snippet = $track_snippet;
  }

  public function getSources()
  {
    Client::call($this->token, "GET", "/domains/" . $id . "/sources");
  }

  public function getReferrers()
  {
    Client::call($this->token, "GET", "/domains/" . $id . "/referrers");
  }

  public function getCountries()
  {
    Client::call($this->token, "GET", "/domains/" . $id . "/countries");
  }

  public function getEntryPages()
  {
    Client::call($this->token, "GET", "/domains/" . $id . "/entry_pages");
  }

  public function getPages()
  {
    Client::call($this->token, "GET", "/domains/" . $id . "/pages");
  }

  public function getGoals()
  {
    Client::call($this->token, "GET", "/domains/" . $id . "/goals");
  }

}
