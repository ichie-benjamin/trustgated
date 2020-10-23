<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Company::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 6; $i++) {
            Company::create([
                'name' => $faker->company,
                'info' => $faker->sentence(20),
                'user_id' => User::inRandomOrder()->first()->id,
                'address' => $faker->streetAddress,
                'website' => $faker->safeEmailDomain,
            ]);
        }
    }
}
