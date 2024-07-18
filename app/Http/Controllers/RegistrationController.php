<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;


class RegistrationController extends Controller
{
    use RegistersUsers;

    public function view(){
        return view('registration');
    }

    public function register(Request $attributes){
        $attributes->validate([
            'name' => ['required'],
            'family' => ['required'],
            'email' => ['required','email'],
            'phone' => ['required'],
            'password' => ['required', 'confirmed'],

        ]);

        $user = User::create([
            'name' => $attributes->name,
            'family' => $attributes->family,
            'email' => $attributes->email,
            'phone' => $attributes->phone,
            'password' => Hash::make($attributes->password),
        ]);
        Auth::login($user);

        return redirect('/panel');
    }
}
