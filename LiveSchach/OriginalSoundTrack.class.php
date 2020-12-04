<?php

namespace LiveSchach;

class OriginalSoundTrack
{
  public string $id;
  public string $name;
  public string $videoGame;
  public int $releaseYear;
  public array $songList;

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