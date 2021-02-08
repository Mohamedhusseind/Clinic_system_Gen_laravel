<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::guard('doctor')->attempt(['email'=>$email,'password'=>$password]))
        {
            $admin = User::where('email','=',$email)->first();
            return view('index');
        }
        else
        {
            echo "error";
            //return redirect()->back()->with('msg',"This Email Not Exist! please try again");
        }

    }

    public function profile()
    {
        return view('profiles.profile');
    }

}
