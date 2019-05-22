<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id)
    {
    	return response()->json([
    		'id' => '1';
    		'name' => 'Ryan';
    		'email' =>' abc@gmail.com';

     	]);
    }
}