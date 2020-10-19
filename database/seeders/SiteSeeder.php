<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\FunctionalArea;
use App\Models\IndustryType;
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
    }
}

