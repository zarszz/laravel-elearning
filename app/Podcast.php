<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $table = 'podcast';
    protected $fillable = ['name_podcast','url_podcast','description_podcast'];
}
