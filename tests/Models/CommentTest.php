<?php

namespace Orkhanahmadov\LaravelCommentable\Tests\Models;

use Illuminate\Support\Facades\Config;
use Orkhanahmadov\LaravelCommentable\Models\Comment;
use Orkhanahmadov\LaravelCommentable\Tests\TestCase;

class CommentTest extends TestCase
{
    public function testSetsTableNameFromConfig()
    {
        $comment1 = new Comment();
        $this->assertSame('comments', $comment1->getTable());

        Config::set('commentable.table_name', 'something_new');
        $comment2 = new Comment();
        $this->assertSame('something_new', $comment2->getTable());
    }
}
