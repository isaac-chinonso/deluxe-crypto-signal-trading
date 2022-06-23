<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    public function image()
    {
        return $this->hasMany('App\Image');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
