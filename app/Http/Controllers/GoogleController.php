<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('user-profile');

            }else{
                $newUser = User::create([
                    'first_name' => $user->user['family_name'],
                    'last_name' => $user->user['given_name'],
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('123456Aa@'),
                    'profile_photo_path' => $user->avatar
                ]);

                Auth::login($newUser);
                return redirect()->intended('user-profile');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
