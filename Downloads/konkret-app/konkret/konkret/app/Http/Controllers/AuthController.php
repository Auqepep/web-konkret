<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function showSignUpForm()
    {
    return view('sign-up');
    }

public function signUp(Request $request)
    {
    $data = $request->validate([
       'full_name' => 'required',
       'email' => 'required|email',
       'password' => 'required|min:6',
        ],[
        'email.unique' => 'Email has been used',
        ]);

        $newUser = user::create($data);

   return redirect()->route('sign-up')->with('success', 'User created successfully');
    }

    public function showSignInForm(Request $request)
    {
        return view('sign-in');
    }

    public function signIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = user::where('email', $credentials['email'])
                      ->where('password', $credentials['password'])
                      ->first();

        if ($user) {

            return redirect()->route('landing-page')->with('success', 'Sign in successful');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->withInput($request->only('email'));
    }
}
