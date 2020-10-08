<?php

namespace App\Models;

use App\AppliedJob;
use App\Currency;
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
    use HasTrixRichText;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $table = 'jobs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $with = ['company','type','currency'];

    protected $appends = ['expired','short_description'];
    protected $fillable = [
                  'title',
                  'slug',
                  'featured',
                  'featured_on',
                  'featured_expires',
                  'description',
                  'user_id',
                  'is_active',
                  'type_id',
                  'category_id',
                  'location_id',
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
                  'experience_to',
                  'qualification',
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
               'deleted_at','closing_date'
           ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    public function getExpiredAttribute(){
        if($this->closing_date >= Carbon::now()){
            return 0;
        }else {
            return 1;
        }
    }

    public function getShortDescriptionAttribute(){
        $text =  substr($this->description,0,100). '...';
        return strip_tags($text);
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class,'currency_id');
    }

    public function applied_job(){
        return $this->hasMany(AppliedJob::class,'job_id');
    }



    /**
     * Get the type for this model.
     *
     * @return App\Models\Type
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type','type_id');
    }

    /**
     * Get the category for this model.
     *
     * @return App\Models\Category
     */
    public function category()
    {
        return $this->belongsTo('App\Models\JobCategory','category_id');
    }

    /**
     * Get the location for this model.
     *
     * @return App\Models\Location
     */
    public function location()
    {
        return $this->belongsTo('App\Models\Location','location_id');
    }

    /**
     * Get the company for this model.
     *
     * @return App\Models\Company
     */
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
