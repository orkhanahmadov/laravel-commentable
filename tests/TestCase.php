<?php

namespace Orkhanahmadov\LaravelCommentable\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use Orchestra\Testbench\TestCase as Orchestra;
use Orkhanahmadov\LaravelCommentable\LaravelCommentableServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Resolve application aliases.
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getApplicationProviders($app)
    {
        return [
            LaravelCommentableServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        DB::statement('CREATE TABLE fake_models (id INT, name VARCHAR);');
    }
}
