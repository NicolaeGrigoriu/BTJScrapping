<?php
namespace BTJ\Scrapper;


abstract class ScrapperService {

  abstract function EventScrap($url);

  abstract function NewsScrap($news);

  abstract function LibraryScrap($library);
}
