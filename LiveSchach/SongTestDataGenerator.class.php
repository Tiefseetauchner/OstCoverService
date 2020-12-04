<?php

namespace LiveSchach;

use LiveSchach\Song;
use LiveSchach\TestDataGenerator;

class SongTestDataGenerator extends TestDataGenerator
{
  private $songFile;
  private int $lineCount = 0;

  public function __construct()
  {
    $this->songFile = fopen("songs.csv", 'r');
    while (!feof($this->songFile)) {
      fgets($this->songFile);
      $this->lineCount++;
    }
    fclose($this->songFile);
    $this->songFile = fopen("songs.csv", 'r');
    parent::__construct();
  }


  public function getTestData()
  {
    $songList = ["U", "U", "U", "1.11"];

    fclose($this->songFile);
    $this->songFile = fopen("songs.csv", 'r');
    for ($i = 0; $i < rand(1, $this->lineCount); $i++) {
      $songList = fgetcsv($this->songFile, 0, ';');
    }

    return new Song($songList[0], $songList[1], $songList[2], 0, floatval($songList[3]));
  }
}