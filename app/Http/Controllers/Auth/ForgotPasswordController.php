<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Sentinel;
use Reminder;
use Illuminate\Support\Str;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;


    public function forgotpassword()
    {

        return view('auth.forgetpassword');
    }

    public function reset(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user){

        $id = $user;
        Mail::send('auth.email.forgot', ['id' => $id], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
      }


        return back()->with('message', 'We have e-mailed your password reset link!');
    }




    // public function sendEmail($user, $code)
    // {

    //     Mail::send(
    //         'email.forgot',
    //         ['user' => $user, 'code' => $code],
    //         function ($message) use ($user) {
    //             $message->to($user->email);
    //             $message->subject("$user->name,reset your password.");
    //         }
    //     );
    // }
}
