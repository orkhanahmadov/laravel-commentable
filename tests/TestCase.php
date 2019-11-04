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
    protected function getPackageProviders($app)
    {
        return [
            LaravelCommentableServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase($this->app);

//        DB::statement('
//            CREATE TABLE comments (
//                id INT,
//                commentable_id INT,
//                commentable_type VARCHAR,
//                comment VARCHAR,
//                updated_at DATE,
//                created_at DATE
//            );');

        DB::statement('CREATE TABLE fake_models (id INT, name VARCHAR);');
    }

    /**
     * Set up the database.
     *
     * @param Application $app
     */
    protected function setUpDatabase($app)
    {
        include_once __DIR__.'/../database/migrations/commentable_table.php.stub';
        (new \CreateCommentableTable())->up();
    }
}
