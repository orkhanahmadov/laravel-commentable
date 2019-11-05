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

    public function testComment()
    {
        $model = FakeModel::create();
        $model->comment('new comment');

        $this->assertCount(1, $model->comments);
        $this->assertInstanceOf(Comment::class, $model->comments->first());
        $this->assertSame('new comment', $model->comments->first()->comment);
    }

    public function testCommentAs()
    {
        $model = FakeModel::create();
        $user = FakeModel::create();
        $model->commentAs($user, 'new comment');

        $this->assertCount(1, $model->comments);
        $this->assertInstanceOf(Comment::class, $model->comments->first());
        $this->assertSame('new comment', $model->comments->first()->comment);
        $this->assertEquals($user->id, $model->comments->first()->user_id);
    }
}
