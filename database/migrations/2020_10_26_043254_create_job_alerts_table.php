<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_alerts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->boolean('is_active')->default(0);
//            $table->integer('type_id')->unsigned()->index();
            $table->integer('industry_id')->unsigned()->index();
            $table->integer('category_id')->nullable();
            $table->text('locations')->nullable();
            $table->text('keywords')->nullable();
            $table->string('min_salary');
            $table->string('max_salary');
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('functional_area')->nullable();
            $table->string('job_role_id')->nullable();
            $table->string('experience_yr')->nullable();
            $table->string('experience_month')->nullable();
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
        Schema::dropIfExists('job_alerts');
    }
}
