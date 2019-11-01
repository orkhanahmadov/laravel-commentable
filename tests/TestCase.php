<?php

namespace Orkhanahmadov\LaravelCommentable\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Orkhanahmadov\LaravelCommentable\LaravelCommentableServiceProvider;

class TestCase extends Orchestra
{
    protected function getApplicationProviders($app)
    {
        return [
            LaravelCommentableServiceProvider::class,
        ];
    }
}
