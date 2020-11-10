<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        //dd(Socialite::driver($provider));
        $userProvider = Socialite::driver($provider)->stateless()->user();
        //dd($user);

        $user = User::firstOrCreate(
            ['email' => $userProvider->getEmail()],
            ['name' => $userProvider->getName() ?? $userProvider->getNickname(),
             'password' => 'teste']
        );

        Auth::login($user);
        return redirect(route('dashboard'));

        // $user->token;
    }

    public function logout(){

        auth()->logout();
        return redirect(route('login'));

    }
}
