<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{   
CONST DRIVER_TYPE = 'facebook';
    
    public function show()
    {
        return view('auth.login');
    }
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {
    
            
            $user = Socialite::driver('facebook')->user();
        
            $isUser = User::where('facebook_id', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                return 'login scessful';
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'facebook_id' => $user->id,
                    'email' => $user->email,
                    
                    'password' => encrypt('admin@123'),
                    'remember_token'=>$user->token
                ]);
    
                Auth::login($createUser);
                return 'login';
                }
    
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }

   
    
}