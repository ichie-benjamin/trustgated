<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
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
        'functional_area',
        'industry',
        'exp_from',
        'exp_to',
        'max_annual_salary',
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

    protected $appends = ['display_name','skill','profile_complete'];



//    protected $casts = [
//        'email_verified_at' => 'datetime',
//        'skills' => 'array',
//        'program_start_date' => 'date'
//    ];

    public function profile()
    {
        return $this->hasOne('App\Profile');
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
    public function getDisplayNameAttribute(){
        if(!$this->first_name && !$this->last_name){
            return $this->username;
        }else{
            return $this->first_name.' '.$this->last_name;
        }
    }

    public function getAvatarAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->display_name);
        }
        return $this->attributes['avatar'];
    }

}
