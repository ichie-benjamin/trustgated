<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','role_id','cv','first_name','avatar','availability','last_name', 'email', 'password','min_annual_salary',
        'program', 'university','program_start_date','program_city','address','city','country','state','headline','skills','bio',
        'pincode',
        'mobile_number',
        'landline_number',
        'fax','gender',
        'dob',
        'function_area',
        'industry',
        'exp_year',
        'exp_month',
        'max_annual_salary','land_countrycode','phone_countrycode',
'land_areacode',
 'basic_education',
'course' ,
 'course2',
 'course3',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $appends = ['name','skill','profile_complete','exp','role','job_plan','access_plan'];

    public function getRoleAttribute(){
        return optional($this->roles->first())->name;
    }

    public function getJobPlanAttribute(){
        return EmployerProduct::whereUserId($this->id)->wherePaid(true)->orderBy('expired_at', 'desc')->first();
    }
    public function getAccessPlanAttribute(){
        return EmployerAccess::whereUserId($this->id)->wherePaid(true)->orderBy('expired_at', 'desc')->first();
    }

    public function url(){
            if($this->hasRole('employer')){
              return route('employer.profile');
            }else {
              return route('jobseeker.profile');
            }
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function getSkillAttribute(){
        if($this->skills){
            return implode(",",$this->skills);
        }
        return '';
    }

    public function getAvailabilityAttribute($value){
        if($value == 'notice'){
            return 'Need notice';
        }else if ($value == 'yes'){
            return 'Available';
        }else{
            return 'Subject to availability';
        }
    }
    public function getExpAttribute(){
        return "$this->exp_year year(s) $this->exp_month month(s)";
    }
    public function getProfileCompleteAttribute(){
        if(!$this->skills || !$this->bio || !$this->cv){
            return 20;
        }else if(!$this->country && !$this->state && !$this->city && !$this->university){
            return 30;
        }else if(!$this->country || !$this->state || !$this->city || !$this->university || $this->program_city || $this->program){
            return 70;
        }else {
            return 100;
        }
    }
    public function getNameAttribute(){
        if(!$this->first_name && !$this->last_name){
            return $this->username;
        }else{
            return $this->first_name.' '.$this->last_name;
        }
    }

    public function location(){
        return "$this->country, $this->state, $this->city";
    }

    public function getAvatarAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->username);
        }
        return $this->attributes['avatar'];
    }


    public function getProfileImageAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->name);
        }
        return $this->attributes['profile_image'];
    }

}
