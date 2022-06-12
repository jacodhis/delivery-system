<?php

namespace App\Http\Controllers\apis\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function register(userRequest $request){
         $user = User::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>Hash::make($request->password)
         ]);
         return $user;
    }
}
