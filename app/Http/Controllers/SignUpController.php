<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    function index(Request $request){
        $error = $request["error"];

        return view("sign_up.index", compact("error"));
    }

    function store(Request $request){
        $name = $request["name"];
        $email = $request["email"];
        $password = $request["password"];
        $passwordConfirmation = $request["passwordConfirmation"];

        if($password !== $passwordConfirmation){
            $error = "パスワードが一致しません";
            return view("sign_up.index",compact("error"));
        }

        if(User::where('email',$email)->exists()){
            $error = "すでに登録されてるメールアドレスです";
            return view("sign_up.index",compact("error"));
        }    

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::male($password),
        ]);

        auth()->login($user);

        return redirect()->route('task');
        
    }


}
