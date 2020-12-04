<?php

namespace LiveSchach;

abstract class TestDataGenerator
{
  public object $testData;

  public function __construct()
  {
    $this->testData = $this->getTestData();
  }

  public abstract function getTestData();

  public function generateTestData()
  {
    $this->testData = $this->getTestData();
  }
}