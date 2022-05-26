<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\MhCompanies;
use App\Models\MhEsubmitProfile;
use App\Models\MhJournals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function show_register_form($company, $seo)
    {
        $companies = MhCompanies::where('companySEOURL', $company)->first();
        $seos = MhJournals::where('seo', $seo)->first();


        return view('frontend.register', compact('companies', 'seos'));
    }

    public function register()
    {

        request()->validate([

            'firstName' => 'required',
            'middleName' => 'required',
            'prefix' => 'required',
            'lastName' => 'required',
            'primaryEmailAddress' => 'required|unique:mh_esubmit_profiles',
            'password' => 'required|min:6|'
        ], [
            'firstName.required' => 'Please enter your first',
            'middleName.required' => 'Your middle Name is Required',
            'lastName.required' => 'Your last Name is Required',
            'prefix.required' => 'The prefix field is Required',
            'primaryEmailAddress.required' => 'Email is required',
            'primaryEmailAddress.unique' => 'This email already exists',
            'password.required' => 'Password is required',
            'password.min' => 'Min 6 characters',
            // 'password.confirmed' => 'Same password again',
        ]);

        MhEsubmitProfile::create([

            'firstName' => request()->get('firstName'),
            'middleName' => request()->get('middleName'),
            'lastName' => request()->get('lastName'),
            'prefixType' => request()->get('prefix'),
            'primaryEmailAddress' => request()->get('primaryEmailAddress'),
            'journalID' => request()->get('journalID'),
            'companyID' => request()->get('companyID'),
            'passWord' => bcrypt(request()->get('password')),
            'passWordVisible' => request()->get('password'),


        ]);




        $company = MhCompanies::find(request()->get('companyID'));
        $seo = MhJournals::find(request()->get('journalID'));

        return redirect()->route('login', [$company->companySEOURL, $seo->seo])->with('message', 'You have Successfully Register');
    }



    public function show_login($company, $seo)
    {
        //dd($company);
        //dd($seo);
        $profiles =  MhEsubmitProfile::all()->first();
         
        $companies = MhCompanies::where('companySEOURL', $company)->first();
        $seos = MhJournals::where('seo', $seo)->first();


        return view('frontend.login', compact('companies', 'seos', 'profiles'));
    }


    public function login()
    {
        request()->validate([
            'primaryEmailAddress' => 'required|email',
            'passWord' => 'required'
        ], [
            'primaryEmailAddress.required' => 'Enter email address please.',
            'primaryEmailAddress.email' => 'Invalid email address.',
            'passWord.required' => 'Enter password please.',
        ]);
        $email = request('primaryEmailAddress');
        $password = request('passWord');
        $journalID = request('journalID');
        $companyID = request('companyID');


        $user = MhEsubmitProfile::where('primaryEmailAddress', $email)->where('journalID', $journalID)->where('companyID', $companyID)->first();

        if (!$user) {

            return redirect()->back()->with(['message' => 'Email not found in our system.']);
        }

        if (!Hash::check($password, $user->passWord)) {

            return redirect()->back()->with(['message' => 'Your password is incorrect.']);
        }


        // if (Hash::check($journalID, $user->journalID)) {
             
            auth('profiles')->login($user);
            return redirect()->route('dashboard-home');

        // } else {
        //     return redirect()->route('home');
        // }
    }


    public function logout()
    {
        auth()->logout();
        session()->invalidate();


        return redirect()->route('login');
    }
}
