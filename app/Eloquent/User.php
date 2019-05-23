<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $hidden =['created_at','updated_at','delected_at'];
    
    public function getComments()
    {

    	return $this->hasMany('App\Eloquent\Comment');
    }

    public static function returnData()
    {

    	return static::with('getComments')->where('status', '=', 1)->get();	
    }
    // query the role of user 
    public function getRole()
    {
        return $this->hasOne('App\Eloquent\Role');
    }
    public static function returnBuyerRole()
    {
        return static::with('getRole')->
            where('role_id','=',2)->get();
    }
    public static function returnSellerRole()
    {
        return static::with('getRole')->
            where('role_id','=',3)->get();
    }
}
