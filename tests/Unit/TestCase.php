<?php

namespace Slvler\Cuttly\Tests\Unit;

use Slvler\Cuttly\CuttlyServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            CuttlyServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app) {}
}
