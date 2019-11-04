<?php

namespace Orkhanahmadov\LaravelCommentable;

use Orkhanahmadov\LaravelCommentable\Models\Comment;

trait Commentable
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function addComment(string $comment): Comment
    {
        return $this->comments()->create([
            'comment' => $comment,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }
}
