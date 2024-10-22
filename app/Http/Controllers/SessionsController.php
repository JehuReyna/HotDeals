<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('user', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'message' => 'El usuario o contraseña está mal, por favor intenta de nuevo',
            ]);
        }
        
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
