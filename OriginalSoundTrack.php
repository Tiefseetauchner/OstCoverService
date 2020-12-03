<?php

namespace LiveSchach;

class OriginalSoundTrack
{
  var string $id;
  var string $name;
  var string $videoGame;
  var int $releaseYear;
  var array $songList;

  /**
   * OriginalSoundTrack constructor.
   * @param string $id
   * @param string $name
   * @param string $videoGame
   * @param int $releaseYear
   * @param array $songList
   */
  public function __construct(string $id, string $name, string $videoGame, int $releaseYear, array $songList)
  {
    $this->id = $id;
    $this->name = $name;
    $this->videoGame = $videoGame;
    $this->releaseYear = $releaseYear;
    $this->songList = $songList;
  }
}