<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');
    }

     public function gredirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function gcallback(SocialAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
    
        auth()->login($user);

        return redirect()->to('/home');
    }


   public function Tredirect()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function Tcallback(SocialAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('twitter')->user());

        auth()->login($user);

        return redirect()->to('/home');
    }
    
}