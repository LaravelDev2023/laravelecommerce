<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;

class UserRegistration extends Controller
{
    //
    public function UserRegistration(){
        $countries = Countries::all();
        return view('user_registration',compact('countries'));
    }
    public function UserRegistrationForm(){
        return view('user_registration');
    }
    public function UserLogin(){
        return view('user_login');
    }
    public function UserLoginForm(){
        return view('user_login'); 
    }
    public function UserResetPassword(){
        return view('resetpassword');
    }
    public function UserResetPasswordForm(){
        return view('resetpassword');
    }
}
