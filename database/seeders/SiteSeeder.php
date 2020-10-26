<?php

namespace Database\Seeders;

use App\Models\EducationDetails;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\FunctionalArea;
use App\Models\IndustryType;
use App\Models\Location;
use App\Models\Page;
use App\Models\State;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f_arease = config('site_seeder.tables.functional_areas');
        $categories = config('site_seeder.tables.categories');
        $i_types = config('site_seeder.tables.industrial_type');
        $locations = config('site_seeder.tables.locations');
        $countries = config('site_seeder.tables.countries');
        $states = config('site_seeder.tables.states');
        $cities = config('site_seeder.tables.cities');
        $ads = config('site_seeder.tables.ads');
        $cms = config('site_seeder.tables.cms');
        $basic_edu = config('site_seeder.tables.basic_edu');


        foreach ($f_arease as $item) {
            if (FunctionalArea::where('category_functional_area', '=', $item)->first() === null) {
                FunctionalArea::create([
                    'category_functional_area' => $item,
                    'category_id' => 1,
                    'featured' => true,
                ]);
            }
        }
        foreach ($categories as $item) {
            if (Category::where('name', '=', $item)->first() === null) {
                Category::create([
                    'name' => $item,
                ]);
            }
        }
        foreach ($i_types as $item) {
            if (IndustryType::where('category', '=', $item)->first() === null) {
                IndustryType::create([
                    'category' => $item,
                    'job_type' => 'IIT/IIM Jobs',
                    'cat_industry_type' => 'Non IT Company'
                ]);
            }
        }
        foreach ($locations as $item) {
            if (Location::where('name', '=', $item)->first() === null) {
                Location::create([
                    'name' => $item
                ]);
            }
        }
        foreach ($countries as $item) {
            if (Country::where('name', '=', $item)->first() === null) {
                Country::create([
                    'name' => $item
                ]);
            }
        }
        foreach ($states as $item) {
            $country_id = Country::whereName('India')->first()->id;
            if (State::where('name', '=', $item)->first() === null) {
                State::create([
                    'name' => $item,
                    'country_id' => $country_id
                ]);
            }
        }
        $i = 1;
        foreach ($cities as $item) {
            $state_id = State::whereName('Delhi')->first()->id;
            if (City::where('name', '=', $item)->first() === null) {
                City::create([
                    'name' => $item,
                    'state_id' => $state_id,
                    'featured' => true,
                    'image' => "/assets/images/city/pic".$i++.'.jpg'
                ]);
            }
        }
        foreach ($cms as $item) {
            if (Page::where('title', '=', $item)->first() === null) {
                Page::create([
                    'title' => $item,
                    'url' => "/$item",
                ]);
            }
        }
        foreach ($basic_edu as $item) {
            if (EducationDetails::where('name', '=', $item)->first() === null) {
                EducationDetails::create([
                    'name' => $item,
                    'category' => "under_graduate",
                ]);
            }
        }
        foreach ($ads as $item) {
            if($item == 'inpex'){
                $position = 'job_right';
            }else{
                $position = 'job_left';
            }
            if (Ad::where('company_name', '=', $item)->first() === null) {
                Ad::create([
                    'company_name' => $item,
                    'status' => true,
                    'image' => "/assets/images/ads/".$item.'.jpg',
                    'position' => $position,
                ]);
            }
        }

        if (Currency::where('name', '=', 'Dollar')->first() === null) {
            Currency::create([
                'name' => 'Dollar',
                'code' => 'USD',
                'symbol' => '$',
            ]);
        }
    }
}

