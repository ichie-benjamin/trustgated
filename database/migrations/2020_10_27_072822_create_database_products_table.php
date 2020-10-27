<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('no_of_days');
            $table->integer('no_of_resumes');
            $table->integer('no_of_emails');
            $table->integer('become_future_list');
            $table->bigInteger('price');
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
        Schema::dropIfExists('database_products');
    }
}
