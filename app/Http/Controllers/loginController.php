<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $email=$request->input('email');
        $pass=$request->input('pass');
        $cheaklogin=DB::table('registrations')->where(['email'=>$email,'pass'=>$pass])->get();

        return redirect('/logindone');
    }
}
