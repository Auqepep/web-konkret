<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
{
    $this->validator($request->all())->validate();

    event(new Registered($user = $this->create($request->all())));

    $this->guard()->login($user);

    return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
}

protected function create(array $data)
{
    return User::create([
        'full_name' => $data['full_name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
}
    public function showRegistrationForm()
{
    return view('auth.sign-up');
}
}
