<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    protected $table = 'rekening';
    protected $fillable = ['no_rekening','atas_nama'];
}
