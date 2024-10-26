<?php

namespace App\Http\Controllers;

use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{

    public function create(Request $request)
    {
        $role = $request->query('role', 'cliente');
        return view('auth.register', ['role' => $role]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'email' => 'required|email',
                'name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'user' => 'required|string|max:255|unique:users,user',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required',
                'role' => 'required|string|in:cliente,vendedor'
            ]);

            $user = User::create([
                'email' => $data['email'],
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'user' => $data['user'],
                'password' => $data['password'],
                'role' => $data['role'],
            ]);

            auth()->login($user);

            return redirect()->intended('/');

        } catch (\Exception $e) {
        Log::error('Error en la creación de usuario: ' . $e->getMessage());
        return back()->withErrors(['message' => 'Hubo un problema al crear el usuario. Por favor, inténtalo de nuevo.'])
            ->withInput()
            ->with('error_console', $e->getMessage());
    }

    }

    public function index(Request $request)
    {
        $role = $request->query('role', 'cliente');
        return view('components.cuenta', ['role' => $role]);
    }
}
