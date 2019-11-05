<?php

namespace Orkhanahmadov\LaravelCommentable\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'ip_address',
        'user_agent',
    ];

    /**
     * Comment constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('commentable.table_name'));
    }
}
