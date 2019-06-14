<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $hidden =['created_at','updated_at','delected_at'];
    public function position()
    {
    	return $this->hasMany('App\Eloquent\User');
    }
}
