<?php

namespace Orkhanahmadov\LaravelCommentable\Tests;

use Orkhanahmadov\LaravelCommentable\Models\Comment;

class CommentableTraitTest extends TestCase
{
    public function testAddCommentsRelation()
    {
        $model = FakeModel::create(['name' => 'something']);
        $model->comments()->create(['comment' => 'my comment']);

        $this->assertCount(1, $model->comments);
        $this->assertInstanceOf(Comment::class, $model->comments->first());
        $this->assertSame('my comment', $model->comments->first()->comment);
    }
}
