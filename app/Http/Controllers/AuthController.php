<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginAction(LoginRequest $request){
        $user = User::where('email', $request->email_or_phone)->orWhere('phone', $request->email_or_phone)->first();
        try {
            if (!$user){
                Throw new \Exception('Wrong credentials! Try again');
            }
            else if (!Hash::check($request->password, $user->password)){
                Throw new \Exception('Wrong credentials! Try again');
            }
            else{
                Auth::login($user);
                return redirect()->route('home');
            }

        }
        catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()])->withInput();
        }
    }


    public function loginWithGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }



    public function loginWithGithubAction()
    {
        $githubUser = Socialite::driver('github')->user();
        $user = User::updateOrCreate([
            'provider_id' => $githubUser->id,
            'provider_name' => 'github',
        ], [
            'name' => $githubUser->name ?? $githubUser->nickname,
            'email' => $githubUser->email,
            'provider_token' => $githubUser->token,
            'provider_refresh_token' => $githubUser->refreshToken,
            'image' => $githubUser->avatar,
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function loginWithGoogleAction()
    {

        $googleUser =Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate([
            'provider_id' => $googleUser->id,
            'provider_name' => 'google',
        ], [
            'name' => $googleUser->name ?? $googleUser->nickname,
            'email' => $googleUser->email,
            'provider_token' => $googleUser->token,
            'provider_refresh_token' => $googleUser->refreshToken,
            'image' => $googleUser->avatar,
        ]);

        Auth::login($user);

        return redirect('/');
    }





    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function signup(){
        return view('auth.signup');
    }

    public function signupAction(SignupRequest $request)
    {
        $data = collect($request->validated())
        ->merge([
            'image' => Helper::FileUpload(request_key: 'image', path: 'files'),
            'password' => Hash::make($request->password)
        ])
        ->toArray();

        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('home');
    }
}
