<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forget-password');
    }

    public function forgotpass(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users"
        ]);

        $token = Str::random(64);

        $insert = DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token
        ]);

        $sent = Mail::send('emails.forget-password', ['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        if($sent)
        {
            return redirect()->to(route('forget-password'))->with('Success', 'Password reset link sent successfully');
        }
        else{
            return redirect()->to(route('forget-password'))->with('fail', 'Mail not sent!');
        }

        
    }

    public function resetpasslink($token)
    {
        return view('reset-password', compact('token'));
    }

    public function resetpass(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users",
            'password' => "required|min:8|confirmed",
            'password_confirmation' => "required|"
        ]);

        $updatepass = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if($updatepass)
        {
            User::where("email", $request->email)->update(["password" => Hash::make($request->password)]);

            DB::table("password_reset_tokens")->where(["email" => $request->email])->delete();

            return redirect()->to(route('login'))->with('Success', 'Password reset successfull!');
        }
        else
        {
            return redirect()->to(route('reset-password'))->with('fail', 'Error occured!');
        }
    }
}
