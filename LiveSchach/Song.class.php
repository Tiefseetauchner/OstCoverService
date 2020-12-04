<?php

namespace LiveSchach;

class Song
{
  public string $id;
  public string $name;
  public string $artist;
  public int $trackNumber;
  public float $duration;

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