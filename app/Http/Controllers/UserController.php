<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Eloquent\User;

class UserController extends Controller
{
    public function returnComment()
    {
    	return response()->json(User::returnData());
    	// return json_encode(User::returnData());
    }
    public function returnBuyers()
    {
    	return response()->json(User::returnBuyerRole());
    }
    public function returnSellers()
    {
    	return response()->json(User::returnSellerRole());
    }
}