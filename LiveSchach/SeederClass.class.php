<?php

namespace LiveSchach;

class SeederClass
{
  public array $testData = array();

  public function __construct()
  {
    $testDataGenerator = new OriginalSoundTrackTestDataGenerator();
    array_push($this->testData, $testDataGenerator->getTestData());
    array_push($this->testData, $testDataGenerator->getTestData());
    array_push($this->testData, $testDataGenerator->getTestData());
  }
}