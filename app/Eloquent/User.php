<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\User;

class User extends Model
{
    //
    public function getComments()
    {

    	return $this->hasMany('app\Eloquent\Comment','foreign_key');
    }

    $User = app\Eloquent\User::find(1);
    $User ->post()->where('active',1)->get();

    $post =App\Post::has('comments')->get();
}
