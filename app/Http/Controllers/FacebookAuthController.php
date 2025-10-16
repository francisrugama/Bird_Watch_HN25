<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacebookAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        $user = User::updateOrCreate([
            'facebook_id' => $facebookUser->getId(),
        ], [
            'name' => $facebookUser->getName(),
            'email' => $facebookUser->getEmail(),
        ]);

        Auth::login($user);

        
        return redirect()->intended('/home');
    }
}