<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthorizationController extends Controller
{
    public function view()
    {

        return view('auth');
    }

    public function login()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        Auth::attempt($attributes);

        request()->session()->regenerate();

        return redirect('/panel');
    }
}
