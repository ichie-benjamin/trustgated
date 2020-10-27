<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Company;
use App\Models\FunctionalArea;
use App\Models\IndustryType;
use App\Models\Job;
use App\Models\Location;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Lets create 150 random phones

//        $faker = $this->getFaker();

        Job::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Job::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 40; $i++){
            Job::create([
                'title' => $faker->jobTitle,
                'description' => $faker->paragraph,
                'user_id' => $this->getRandomUserId(),
                'is_active' => true,
                'type_id' => $faker->randomDigit,
                'category_id' => $faker->randomDigit,
                'locations' => Location::inRandomOrder()->first()->name,
                'min_salary' => $faker->numberBetween(100, 500),
                'max_salary' => $faker->numberBetween(500, 1000),
                'company_id' => $this->getRandomCompanyId(),
                'email' => $faker->freeEmail,
                'url' => $faker->safeEmailDomain,
                'closing_date' => Carbon::now()->addDay(7),
                'address' => $faker->streetAddress,
                'functional_area' => $this->getRandomFarea(),
//            'job_role_id' => $faker,
//            'candidate_description' => $faker,
                'experience_from' => 1,
                'experience_to' => 3,
                'city' => City::inRandomOrder()->first()->name,
                'state' => State::inRandomOrder()->first()->name,
                'industry_id' => $this->getRandomIndusId()
            ]);
        }
    }
    private function getRandomUserId() {
        $user = User::inRandomOrder()->first();
        return $user->id;
    }
    private function getRandomCompanyId() {
        return Company::inRandomOrder()->first()->id;
    }
    private function getRandomIndusId() {
        return IndustryType::inRandomOrder()->first()->id;
    }
    private function getRandomFarea() {
        return FunctionalArea::inRandomOrder()->first()->id;
    }
}
