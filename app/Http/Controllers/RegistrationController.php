<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('form1');
    }

    public function register(Request $request){

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|confirmed'
            ]);
        echo "<pre>";
        print_r($request->all());
    }
}
