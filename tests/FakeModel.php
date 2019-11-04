<?php

namespace Orkhanahmadov\LaravelCommentable\Tests;

use Illuminate\Database\Eloquent\Model;
use Orkhanahmadov\LaravelCommentable\Commentable;

class FakeModel extends Model
{
    use Commentable;

    public $timestamps = false;

    protected $guarded = [];
}
