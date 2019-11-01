<?php

namespace Orkhanahmadov\LaravelCommentable\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('comments.table_name'));
    }
}
