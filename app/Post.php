<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = array('id', 'title', 'content', 'created_at', 'updated_at');

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
}
