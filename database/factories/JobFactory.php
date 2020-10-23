<?php

namespace Database\Factories;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->sentence(20),
            'user_id' => '',
            'is_active' => true,
            'type_id' => $this->faker->randomDigit,
            'category_id' => $this->faker->randomDigit,
            'locations' => '',
            'min_salary' => $this->faker->numberBetween(100, 500),
            'max_salary' => $this->faker->numberBetween(500, 1000),
            'company_id' => '',
            'email' => $this->faker->freeEmail,
            'url' => $this->faker->safeEmailDomain,
            'closing_date' => Carbon::now()->addDay(7),
            'address' => $this->faker->streetAddress,
            'functional_area' => '',
//            'job_role_id' => $this->faker,
//            'candidate_description' => $this->faker,
            'experience_from' => 1,
            'experience_to' => 3,
            'city' => '',
            'state' => '',
            'industry_id' => ''
        ];
    }
}
