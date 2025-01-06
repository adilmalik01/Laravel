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


    public function AddUser(Request $request)
    {


        $name = $request->input("username");
        $email = $request->input("email");
        $password = $request->input("password");

        echo  $name."<br>". $email."<br>". $password; 
    }


    public function LoginForm(Request $request)
    {

        $email = $request->input("email");
        $password = $request->input("password");

        echo   $email."<br>". $password; 
    }
}
