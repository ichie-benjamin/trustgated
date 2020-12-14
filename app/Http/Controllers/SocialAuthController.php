<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect(Request $request, $provider)
    {
        $request->session()->put('social_role',$request->get('role'));
        return Socialite::driver($provider)->redirect();
    }
//    public function callback($provider)
//    {
//        $userSocial =   Socialite::driver($provider)->user();
//    }
    public function callback(Request $request,$provider){
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();
        if($users){
            Auth::login($users);
            return redirect('/');
        }else{
            $s_role = $request->session()->get('social_role');
            $role = Role::where('name',$s_role)->first();
            if($role){
                $user = User::create([
                    'username'          => strtolower(str_replace(' ','_',$userSocial->getName())),
                    'email'         => $userSocial->getEmail(),
//                'avatar'         => $userSocial->getAvatar(),
                    'provider_id'   => $userSocial->getId(),
                    'provider'      => $provider,
                    'email_verified_at'      => Carbon::now(),
                ]);
                $user->attachRole($role);
                Auth::login(User::where(['email' => $userSocial->getEmail()])->first());
                if($s_role == 'employer'){
                    Company::create([
                        'user_id' => $user->id,
                        'website' => '',
                        'phone' => '',
                        'name' => $userSocial->getName(),
                        'contact_person' => $userSocial->getName(),
                    ]);
                }
                $url = $this->redirectTo();
                return redirect()->to($url);
            }else{
                return $s_role;
            }

        }
    }

    protected function redirectTo()
    {
        if (auth()->user()->hasRole('jobseeker')) {
            return '/jobseeker/profile';
        }
        if (auth()->user()->hasRole('employer')) {
            return '/employer/profile';
        }
        return '/home';
    }
}
