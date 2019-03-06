<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    //
    protected $fillable = ['album_id', 'description', 'photo', 'title', 'size'];

    public function albums () 
    {
       return $this->belongsTo('App\Album');

    }
}
