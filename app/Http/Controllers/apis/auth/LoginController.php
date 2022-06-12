<?php

namespace App\Http\Controllers\apis\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //
    public function login(Request $request){
        $user = User::where('email',$request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            $message['message'] = 'failed';
               return $message;
        }
        $message['message'] = 'success';
        $message['user'] = $user ;
        $message['token'] = rand(1000,2000).'_'.time();
       
        return $message;
    }
  
}
