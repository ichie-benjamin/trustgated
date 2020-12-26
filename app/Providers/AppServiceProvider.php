<?php

namespace App\Providers;

use App\Models\Ad;
use App\Models\Company;
use App\Models\FunctionalArea;
use App\Models\IndustryType;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $f_companies = Cache::remember('f_companies', 3600, function () {
            return Company::select('name','id','logo','slug')->inRandomOrder()->limit(6)->get();
        });
        $ad_job_right = Cache::remember('ad_job_right', 3600, function () {
            return Ad::select('company_name','image','position')->whereStatus(true)->wherePosition('job_right')->inRandomOrder()->limit(3)->get();
        });
        $ad_job_left = Cache::remember('ad_job_left', 3600, function () {
            return Ad::select('company_name','image','position')->whereStatus(true)->wherePosition('job_left')->inRandomOrder()->limit(3)->get();
        });
        $f_areas = Cache::remember('f_areas', 3600, function () {
            return FunctionalArea::pluck('id','category_functional_area');
        });
        $industries = Cache::remember('industries', 3600, function () {
            return IndustryType::pluck('id','category');
        });
        Schema::defaultStringLength(191);
        View::share(['f_companies' => $f_companies, 'ad_job_right' => $ad_job_right, 'ad_job_left' => $ad_job_left,'f_areas' => $f_areas,'industries' => $industries]);

    }
}
