<?php

namespace EskayAmadeus\LaravelAuthPackage\Tests;

use EskayAmadeus\LaravelAuthPackage\LaravelAuthPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app)
  {
    return [
      LaravelAuthPackageServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }
}