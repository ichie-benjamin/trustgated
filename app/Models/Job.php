<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Job extends Model
{

    use SoftDeletes;
    use Sluggable;
    use SluggableScopeHelpers;
//    use HasTrixRichText;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $table = 'jobs';

    protected $primaryKey = 'id';

    protected $with = ['company','type','user','currency','functional','industry'];

    protected $appends = ['expired','short_description','status','salary'];
    protected $fillable = [
                  'title',
                  'slug',
                  'country',
                  'state',
                  'featured',
                  'featured_on',
                  'featured_expires',
                  'description',
                  'user_id',
                  'is_active',
                  'type_id',
                  'category_id',
                  'locations',
                  'min_salary',
                  'max_salary',
                  'company_id',
                  'is_apply_here',
                  'email',
                  'url',
                  'closing_date',
                  'files','address',
                  'tags','job_to',
                  'functional_area',
                  'job_role_id',
                  'hide_email',
                  'hide_phone',
                  'hide_address',
                  'candidate_description',
                  'experience_from',
                  'experience_to','city',
                  'qualification','industry_id'
              ];


    protected $dates = [
               'deleted_at','closing_date'
           ];

    protected $casts = [];

    public function getExpiredAttribute(){
        if($this->closing_date >= Carbon::now()){
            return 0;
        }else {
            return 1;
        }
    }



    public function getSalaryAttribute(){
       return "$this->min_salary - $this->max_salary ". optional($this->currency)->code ;
    }

    public function setLocationsAttribute($value)
    {
        $this->attributes['locations'] = json_encode($value);
    }

    public function getLocationsAttribute($value){
        if($value){
            return json_decode($value, true);
        }else{
           return [];
        }
    }

//    public function getLocationsAttribute($value){
//        return json_decode($value) ?: [];
//    }

    public function getStatusAttribute(){
        if($this->is_active){
            if($this->is_disabled){
                return 'disabled';
            }else{
                return 'Active';
            }
        }else {
            return 'Pending verification';
        }
    }

    public function getQualificationAttribute($value){
        return json_decode($value) ?: [];
    }

    public function setQualificationAttribute($value)
    {
        $this->attributes['qualification'] = json_encode($value);
    }

    public function getShortDescriptionAttribute(){
        $text =  substr($this->description,0,100). '...';
        return strip_tags($text);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class,'currency_id');
    }

    public function applied_job(){
        return $this->hasMany(AppliedJob::class,'job_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type','type_id');
    }
    public function industry()
    {
        return $this->belongsTo(IndustryType::class,'industry_id');
    }

    public function functional()
    {
        return $this->belongsTo(FunctionalArea::class,'functional_area');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\JobCategory','category_id');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location','location_id');
    }


    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }

    /**
     * Set the closing_date.
     *
     * @param  string  $value
     * @return void
     */
//    public function setClosingDateAttribute($value)
//    {
//        $this->attributes['closing_date'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
//    }
//
//    /**
//     * Get closing_date in array format
//     *
//     * @param  string  $value
//     * @return array
//     */
//    public function getClosingDateAttribute($value)
//    {
//        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y');
//    }

}
