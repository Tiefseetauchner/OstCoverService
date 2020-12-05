<?php

namespace LiveSchach;

use LiveSchach\Song;
use LiveSchach\TestDataGenerator;

class OriginalSoundTrackTestDataGenerator extends TestDataGenerator
{
  private $ostFile;
  private int $lineCount = 0;
  private string $filePath = "osts.csv";

  public function __construct()
  {
    $this->ostFile = fopen($this->filePath, 'r');
    while (!feof($this->ostFile)) {
      fgets($this->ostFile);
      $this->lineCount++;
    }
    fclose($this->ostFile);
    $this->ostFile = fopen($this->filePath, 'r');
    parent::__construct();
  }

  public function getTestData()
  {
    $songs = array();
    $ostList = ["U", "U", "U", "1.11"];

    fclose($this->ostFile);
    $this->ostFile = fopen($this->filePath, 'r');
    for ($i = 0; $i < rand(1, $this->lineCount); $i++) {
      $ostList = fgetcsv($this->ostFile, 0, ';');
    }

    $songTestDataMock = new SongTestDataGenerator();
    for ($i = 0; $i < 4; $i++) {
      array_push($songs, $songTestDataMock->getTestData());
    }

    return new OriginalSoundTrack($ostList[0], $ostList[1], $ostList[2], $ostList[3], $songs);
  }
}