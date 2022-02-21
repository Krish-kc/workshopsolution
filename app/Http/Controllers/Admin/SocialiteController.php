<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    //

    //  google login

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {

        try {

            $user = Socialite::driver('google')->user();
            dd($user);

            $isUser = User::where('provider_id', $user->id)->first();


            if ($isUser) {
                Auth::login($isUser);
                return redirect('/');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider_id' => $user->provider_id,
                ]);

                Auth::login($createUser);
                return redirect('/');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }











    // public function handleGoogleCallBack(){
    //     $user = Socialite::driver('google')->user();
    //     dd($user);
    //     $this->_registerOrLoginUser($user);
    //     //return
    //     return redirect()->route('home');

    // }


    // public function redirectToFacebook()
    // {
    //     return Socialite::driver('facebook')->redirect();
    // }

    // public function handelFacebookCallBack(){
    //     $user = Socialite::driver('facebook')->user();
    //     $this->_registerOrLoginUser($user);
    //     //return
    //     return redirect()->route('home');
    // }


    // protected function _registerOrLoginUser($request){
    // dd($request);




    // $user = User::where('email','=',$request->email)->first();
    // if(!$user){

    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->provider_id = $request->provider_id;
    //     $user->save();
    // }

    // Auth::login($user);
    // }

}
