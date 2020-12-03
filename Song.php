<?php

namespace LiveSchach;

class Song
{
  var string $id;
  var string $name;
  var string $artist;
  var int $trackNumber;
  var float $duration;

  /**
   * Song constructor.
   * @param string $id
   * @param string $name
   * @param string $artist
   * @param int $trackNumber
   * @param float $duration
   */
  public function __construct(string $id, string $name, string $artist, int $trackNumber, float $duration)
  {
    $this->id = $id;
    $this->name = $name;
    $this->artist = $artist;
    $this->trackNumber = $trackNumber;
    $this->duration = $duration;
  }
}