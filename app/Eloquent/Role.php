<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function position()
    {
    	return $this->belongsTo('App\Eloquent\User');
    }
}
