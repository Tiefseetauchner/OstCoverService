<?php

namespace LiveSchach;

abstract class TestDataGenerator
{
  var array $testData;

  public function __construct()
  {
    $this->testData = $this->generateTestData();
  }

  public abstract function generateTestData();
}