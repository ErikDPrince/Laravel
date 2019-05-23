<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $hidden = ['updated_at'];
    public function getUsers()
    {
    	return $this->belongsTo('app\Eloquent\User');
    }

}
