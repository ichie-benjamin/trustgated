<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = RouteServiceProvider::HOME;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


        protected function validator(array $data)
    {

        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed',  'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/'],
            'g-recaptcha-response' => ['required|captcha']

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {

        $role = Role::where('name',$data['role'])->first();
        $user = User::create([
            'username' => $data['username'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'skill_i_hire' => $data['skill_i_hire'],
            'pincode' => $data['pincode'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'state' => $data['state'],
            'city' => $data['city'],
            'phone_countrycode' => $data['phone_countrycode'],
            'mobile_number' => $data['mobile_number'],
            'land_countrycode' => $data['land_countrycode'],
            'land_areacode' => $data['land_areacode'],
            'exp_year' => $data['exp_year'],
            'exp_month' => $data['exp_month'],
            'function_area' => $data['function_area'],
            'skills' => $data['keyskills'],
            'basic_education' => $data['basic_education'],
            'course' => $data['course'],
            'course2' => $data['course2'],
            'course3' => $data['course3'],
        ]);
        $user->attachRole($role);
        if($data['role'] == 'employer'){
            Company::create([
                'user_id' => $user->id,
                'website' => $data['website_url'],
                'phone' => $data['country_code'].$data['city_code'].$data['no3'],
                'name' => $data['companyname'],
                'address' => $data['address'],
                'type' => $data['industry_type'],
                'contact_person' => $data['Contact_Person'],
                ]);
        }
        return $user;
    }
}
