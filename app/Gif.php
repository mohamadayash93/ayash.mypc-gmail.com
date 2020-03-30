<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gif extends Model
{
    protected $fillable = [
        'keywords', 'image',
    ];

    public function favorite(){
        return $this->hasMany('App\Favorite', 'gif_id');
    }
}
