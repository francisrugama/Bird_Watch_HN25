<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SocialController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::where('google_id', $googleUser->getId())->first()
            ?? User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            $user->update([
                'google_id' => $googleUser->getId(),
                'name' => $googleUser->getName() ?? $user->name,
            ]);
        } else {
            $user = User::create([
                'name' => $googleUser->getName() ?? $googleUser->getNickname() ?? 'Usuario',
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => bcrypt(Str::random(16)),
            ]);
        }

        Auth::login($user, true);

        return redirect()->intended('/home');
    }
}