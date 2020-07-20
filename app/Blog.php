<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['name_blog','thumbnail_blog','content_blog'];
}
