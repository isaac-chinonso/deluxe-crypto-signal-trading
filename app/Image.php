<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function deposit()
    {
    	return $this->hasMany('App\Deposit');
    }
}
