<?php

namespace JayThakkar\MoneyWrapper\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \JayThakkar\MoneyWrapper\MoneyWrapperServiceProvider::class,
        ];
    }
}
