<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('pincode')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('landline_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('functional_area')->nullable();
            $table->string('industry')->nullable();
            $table->string('availability')->default('notice');
//            $table->string('university')->nullable();
//            $table->string('program')->nullable();
//            $table->string('program_start_date')->nullable();
//            $table->string('program_city')->nullable();
            $table->string('headline')->nullable();
            $table->string('skills')->nullable();
            $table->string('exp_year')->nullable();
            $table->string('exp_month')->nullable();
            $table->text('bio')->nullable();
            $table->string('min_annual_salary')->nullable();
            $table->string('max_annual_salary')->nullable();
            $table->string('cv')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('current_team_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
