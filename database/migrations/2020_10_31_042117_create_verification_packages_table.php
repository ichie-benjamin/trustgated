<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('info')->nullable();
            $table->integer('employment_verification')->default(1);
            $table->integer('education_verification')->default(1);
            $table->integer('reference_verification')->default(1);
            $table->integer('amount')->default(1);
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
        Schema::dropIfExists('verification_packages');
    }
}
