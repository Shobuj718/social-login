<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\User;

class TwitterLoginController extends Controller
{
    public function twitterRedirect()
    {
    	return Socialite::driver('twitter')->redirect();
    }
    public function TwitterCallback()
    {
        $twitterSocial =   Socialite::driver('twitter')->user();
        $users       =   User::where(['email' => $twitterSocial->getEmail()])->first();

        dd($twitterSocial);

        if($users){
            Auth::login($users);
            return redirect('/home');
        }else{
            $user = User::firstOrCreate([
                'name'          => $twitterSocial->getName(),
                'email'         => $twitterSocial->getEmail(),
                'image'         => $twitterSocial->getAvatar(),
                'provider_id'   => $twitterSocial->getId(),
                'provider'      => 'twitter',
            ]);
            return redirect()->route('home');
        }
    }
}
