<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{


    public function Login()
    {
        return view("login");
    }


    public function Registar()
    {
        return view("registar");
    }  


    public function RegistarUser(Request $request)
    {


        $name = $request->input("username");
        $email = $request->input("email");
        $password = $request->input("password");

        echo  $name."<br>". $email."<br>". $password; 
    }


    public function UserLogin(Request $request)
    {

        $email = $request->input("email");
        $password = $request->input("password");

        echo   $email."<br>". $password; 
    }
}
