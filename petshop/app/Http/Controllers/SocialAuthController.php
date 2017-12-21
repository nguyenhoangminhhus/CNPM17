<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use User;
use Auth;

class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();   
    }   

    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('google')->stateless()->user(); 

        return $user->name;
        // $findUser = User::where('email', $userSocial->email)->first();
        // if ($findUser) {
        // 	Auth::login($findUser);
        // 	return redirect()->route('/');	
        // } else {
        // 	$user = new User();

        // 	$user->fullname = $userSocial->name;
       	//  	$user->account = $userSocial->name;
        // 	$user->email = $userSocial->email;
        // 	$user->password = bcrypt(123456);
        // 	$user->role = '1';
        // 	$user->sign_date = date('Y-m-d');

        // 	$user->save();
        // 	Auth::login($user);
        // 	return redirect()->route('/');
        // }
        
    }
}
