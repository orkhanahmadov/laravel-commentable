<?php

namespace Orkhanahmadov\LaravelCommentable\Tests;

use Orkhanahmadov\LaravelCommentable\Models\Comment;

class CommentableTraitTest extends TestCase
{
    public function testCommentsRelation()
    {
        $model = FakeModel::create();
        $model->comments()->create(['comment' => 'my comment']);

        $this->assertCount(1, $model->comments);
        $this->assertInstanceOf(Comment::class, $model->comments->first());
        $this->assertSame('my comment', $model->comments->first()->comment);
    }

    public function testAddComment()
    {
        $model = FakeModel::create();
        $model->addComment('new comment');

        $this->assertCount(1, $model->comments);
        $this->assertInstanceOf(Comment::class, $model->comments->first());
        $this->assertSame('new comment', $model->comments->first()->comment);
    }
}
