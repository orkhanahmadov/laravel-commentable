<?php

namespace Orkhanahmadov\LaravelCommentable;

use Orkhanahmadov\LaravelCommentable\Models\Comment;

trait Commentable
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
