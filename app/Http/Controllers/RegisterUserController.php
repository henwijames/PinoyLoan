<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
