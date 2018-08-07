<?php

namespace BTJ\Scrapper;

use Goutte\Client;
use BTJ\Scrapper\Container;

class CSLibraryService extends ScrapperService {

  public function EventScrap($url) {
    /*    $crawler = $client->request('GET', $url . '/calendar/html?fDateMin=2018-07-26');

    $crawler->filter('a.page-link')->each(function($node) use ($url, $client,
     $scrapper ) {
      $href = $node->attr('href');
      $event = $client->request('GET', $url . $href);
      //
     $scrapper->getNode($event);
    });*/



    $container = new Container\EventContainer();
    $container->setTitle('CS Library title');

    return $container;
  }

  public function NewsScrap($news) {
    // TODO: Implement NewsScrap() method.

    // Complex DOM parsing

    // Get $title from DOM
    // $this->crawler->setTitle($title);

    // Get $body from DOM
    // $this->crawler->setBody($body);
  }

  public function LibraryScrap($library) {
    // TODO: Implement LibraryScrap() method.

    // Complex DOM parsing

    // Get $title from DOM
    // $this->crawler->setTitle($title);

    // Get $body from DOM
    // $this->crawler->setBody($body);
  }
}
