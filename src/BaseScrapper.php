<?php

namespace BTJ\Scrapper;

class BaseScrapper {
  protected $service;

  protected $url;

  public function __construct($service, $url) {
    $this->service = $service;
    $this->url = $url;
  }

  public function scrap($event) {
    echo 'scrap scrap';
  }
}
