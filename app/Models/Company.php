<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Company extends Model
{

    use Sluggable;
    use SluggableScopeHelpers;
    use HasTrixRichText;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    protected $with = ['user'];
    protected $table = 'companies';

    protected $appends = ['short_description'];

    public function getShortDescriptionAttribute(){
        $text =  substr($this->description,0,100). '...';
        return strip_tags($text);
    }


    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_id',
                  'name','logo','address','email','website','phone','slug','info',
                  'address'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the user for this model.
     *
     * @return App\Models\User
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

    public function getLogoAttribute(){
        if(!$this->attributes['logo']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->name);
        }
        return $this->attributes['logo'];
    }


}
