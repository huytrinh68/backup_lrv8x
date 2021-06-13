<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('fb_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('user-profile');

            }else{
                $name = trim($user->name);
                $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
                $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
                $newUser = User::create([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $user->email,
                    'fb_id'=> $user->id,
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
