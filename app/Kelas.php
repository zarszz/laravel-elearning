<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['name_kelas', 'type_kelas', 'description_video','thumbnail'];

    public function video()
    {
        return $this->hasMany('App\Video');
    }
}
