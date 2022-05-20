<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\MhEsubmitProfile;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function show_register_form()
    {
        return view('frontend.register');
    }

    public function register()
    {
        request()->validate([
           
            'firstName' => 'required',
            'middleName' => 'required',
            'prefix' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed'
        ], [
            'firstName.required' => 'Your first Name is Required',
            'middleName.required' => 'Your middle Name is Required',
            'lastName.required' => 'Your last Name is Required',
            'prefix.required' => 'The prefix field is Required',
            'email.required' => 'Email is required',
            'email.unique' => 'This email already exists',
            'password.required' => 'Password is required',
            'password.min' => 'Min 6 characters',
            'password.confirmed' => 'Same password again',
        ]);

       MhEsubmitProfile::create([

            'firstName' => request()->get('firstName'),
            'middleName' => request()->get('middleName'),
            'lastName' => request()->get('lastName'),
            'prefixType' => request()->get('prefix'),
            'email' => request()->get('email'),
            'password' => bcrypt(request()->get('password')),


        ]);
        return redirect()->route('login')->with('message', 'You have Successfully Register');
    }



    public function show_login()
    {
        return view('frontend.login');
    }

    public function login()
    {
        request()->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Invalid email address.',
            'email.exists' => 'No user with this email address exists.',
            'password.required' => 'The password field is required.',
        ]);

        $email = request('email');
        $password = request('password');

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            $user = MhEsubmitProfile::where('email', $email)->first();
            auth()->login($user);
            return redirect()->route('home');

        } else {

            return redirect()->back()->withErrors(['message' => 'Incorrect password.']);
        }
    }

    public function logout()
    {
        auth()->logout();
        session()->invalidate();


        return redirect()->route('login');
    }

}
