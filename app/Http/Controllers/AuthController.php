<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Str;


class AuthController extends Controller
{
    //
    public function login()
    {
        return view('content.login');
    }

    public function user_login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        //dd([$request->email, $request->password]);
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register()
    {
        return view('content.register');
    }

    public function user_register(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user',
            'sebagai' => $request->sebagai,
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }
}
