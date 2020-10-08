<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('title', 255)->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->boolean('is_active')->default(0);
            $table->integer('type_id')->unsigned()->index();
            $table->integer('industry_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('location_id')->unsigned()->index();
            $table->string('min_salary');
            $table->string('max_salary');
            $table->integer('company_id')->unsigned()->nullable()->index();
            $table->boolean('is_apply_here')->default(0);
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->date('closing_date')->nullable();
            $table->string('files')->nullable();
            $table->string('tags')->nullable();
            $table->string('job_to')->nullable();
            $table->string('functional_area')->nullable();
            $table->string('job_role_id')->nullable();
            $table->string('country')->nullable();
            $table->integer('location_id')->nullable()->change();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('hide_email')->default(0);
            $table->boolean('hide_phone')->default(0);
            $table->boolean('hide_address')->default(0);
            $table->date('featured_on')->nullable();
            $table->date('featured_expires')->nullable();
            $table->text('candidate_description')->nullable();
            $table->string('experience_from')->nullable();
            $table->string('experience_to')->nullable();
            $table->string('qualification')->nullable();
            $table->integer('currency_id')->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
