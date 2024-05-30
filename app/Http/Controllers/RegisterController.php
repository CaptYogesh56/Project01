<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');        
    }

    public function register(Request $request) { //Function to register user
        
        $request->validate(
            ['name' => 'required',
             'email' => 'required|email|unique:users',
              'password' => 'required|min:8|confirmed',
              'password_confirmation' => 'required|min:8']
        );

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $res = $user->save();

        if($res)
        {
            return back()->with('Success', 'Registration Successful!!');
        }
        else
        {
            return back()->with('fail', 'Some error occured!');
        }
        
    }

    public function loginindex() {
        return view('login');        
    }

    public function login(Request $request) { //Function to login user
        
        $request->validate(
            ['email' => 'required|email',
              'password' => 'required|min:8']
        );

        $user = User::where('email', '=', $request->email)->first();

        // $user->email = $request->email;
        // $user->password = $request->password;

        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('userid', $user->id);
                $request->session()->put('username', $user->name);
                return redirect('irrigation');
            }
            else
            {
                return back()->with('fail', 'Email or password is incorrect!');
            }
        }
        else
        {
            return back()->with('fail', 'No such user exists!!');
        }
      
        
    }

    public function logout(Request $request) //Function to logout user
    {
        Auth::logout();
        return redirect('login');
    }
}
