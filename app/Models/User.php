<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Yadahan\AuthenticationLog\AuthenticationLogable;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable, AuthenticationLogable;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','role_id','cv','first_name','avatar','availability','last_name', 'email', 'password','min_annual_salary','parent_id',
        'program', 'university','program_start_date','program_city','address','city','country','state','headline','skills','bio',
        'pincode','provider_id','provider',
        'mobile_number',
        'landline_number',
        'fax','gender',
        'dob','avatar',
        'function_area',
        'industry',
        'visibility',
        'exp_year',
        'exp_month',
        'max_annual_salary','land_countrycode','phone_countrycode',
'land_areacode',
 'basic_education',
'course' ,
 'course2',
 'course3','job_type','employment_status','affirmative_category','affirmative_description','physically_challenged','usa_work_permit','country_work_permit',
        'language1',
        'language1_proficiency',
        'language1_rws',
        'language2',
        'language2_proficiency',
        'language2_rws',
        'language3',
        'language3_proficiency',
        'language3_rws',
        'it_skills'
    ];

    public $fields = [
        'cv','first_name','avatar','availability','last_name','min_annual_salary',
        'program', 'university','address','city','country','state','headline','skills','bio',
        'mobile_number',
        'function_area',
        'industry',
        'visibility',
        'exp_year',
        'exp_month',
        'basic_education',
        'course' , 'employment_status','physically_challenged',
        'language1',
        'email_verified_at'
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

    public function setCountryWorkPermitAttribute($value)
    {
        $this->attributes['country_work_permit'] = json_encode($value);
    }
    public function setItSkillsAttribute($value)
    {
        $this->attributes['it_skills'] = json_encode($value);
    }

    public function getCountryWorkPermitAttribute($value){
        if($value){
            if(is_array($value)){
                return json_decode($value) ;
            }else{
                return  [];
            }
        }else{
            [];
        }
    }

    public function setLanguage2RwsAttribute($value)
    {
        $this->attributes['language2_rws'] = json_encode($value);
    }

    public function setLanguage3RwsAttribute($value)
    {
        $this->attributes['language3_rws'] = json_encode($value);
    }

    public function setLanguage1RwsAttribute($value)
    {
        $this->attributes['language1_rws'] = json_encode($value);
    }

    public function getItSkillsAttribute($value){
        return json_decode($value) ?: [];
    }
    public function getLanguage2RwsAttribute($value){
        return json_decode($value) ?: [];
    }

    public function getLanguage3RwsAttribute($value){
        return json_decode($value) ?: [];
    }

    public function getLanguage1RwsAttribute($value){
        return json_decode($value) ?: [];
    }



    public function getRoleAttribute(){
        return optional($this->roles->first())->name;
    }

    public function visible(){
        if($this->visibility < 1){
            return 'not active';
        }
        if($this->visibility === 1){
            return 'active';
        }
        if($this->visibility > 1){
            return 'not visible';
        }
    }

    public function applied($job){
        $applied = AppliedJob::where('user_id',$this->id)->where('job_id',$job)->get();
        if(count($applied) > 0){
            return true;
        }else {
            return false;
        }
    }

    public function resumeView(){
        return ResumeView::where('jobseeker_id',$this->id)->count();
    }

    public function resumeDownload(){
        return ResumeDownload::where('jobseeker_id',$this->id)->count();
    }

    public function profilePending(){
        $empty = [];
        $excludes = ["role_id","program","program_start_date","program_city","landline_number","fax","phone_countrycode","course2","course3","job_type","country_work_permit","language1_proficiency","language2","language2_proficiency","language3","language3_proficiency",'usa_work_permit'];
        foreach ($this->fillable as $item){
            if(is_null($this->$item) && !in_array($item, $excludes)){
                array_push($empty,$item);
            }
        }
       return $empty;
    }

    public function profileStatus(){
        $total = count($this->fields);
        $empty = [];
        foreach ($this->fields as $item){
            if(is_null($this->$item)){
                array_push($empty,$item);
            }
        }
       $filld = $total - count($empty);
       $gr = (int)(($filld / $total) * 100);
       if($gr > 100){
           return 100;
       }
       return $gr;
    }


    public function allApplied(){
        return $applied = AppliedJob::where('user_id',$this->id)->count();
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
