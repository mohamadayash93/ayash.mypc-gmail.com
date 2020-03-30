<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'query'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
