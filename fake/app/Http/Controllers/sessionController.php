<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
            'remember' => 'boolean',
        ]);

        // Remember me
        $remember = true;

        // if the value has not been sent remember me turns to false
        if (!array_key_exists('remember', $attributes)) {
            $remember = false;
        }

        // Try to authenticate
        if (Auth::attempt(['email' => $attributes['email'], 'password' => $attributes['password']], $remember)) {
            // Auth success
            return redirect('/');
        }

        return back();
    }

    public function register() {
        // Validate request atributes
        $attributes = request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:8'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        // Insert in BD
        User::create($attributes);

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('logout', 'You have been logged out successfully');
    }
}
