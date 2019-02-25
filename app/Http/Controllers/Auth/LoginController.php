<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($site)
    {
        return Socialite::driver($site)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($site)
    {
        Log::info("===소셜 로그인 (" . $site . ") ===");

        try{
            $user = Socialite::driver($site)->user();
            //dd($user);
        }catch(\Exception $e){
            return redirect('/');
        }

        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            Log::info("이미 가입한 소셜 로그인 사용자");
            auth()->login($existingUser, true);
        }else{
            if(isset($user->email)){
                $newUser = new User();
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                $newUser->save();

                Log::info("신규 가입한 소셜 로그인 사용자");
                Log::info($newUser);

                auth()->login($newUser, true);
            }
        }
        return redirect()->to('/');
    }


}
