<?php

namespace App\Http\Controllers;

use  App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){

        $user = User::create(request(['email','name','last_name','user','password','confirm_password']));

        auth()-> login($user);
        return redirect()->to('/');
    }
}
