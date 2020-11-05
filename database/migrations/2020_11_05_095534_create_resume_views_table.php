<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jobseeker_id')->unsigned()->index();
            $table->bigInteger('employer_id')->unsigned()->index();
            $table->foreign('jobseeker_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('employer_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('resume_views');
    }
}
