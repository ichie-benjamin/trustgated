<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('name', 255)->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->text('info')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('verified')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
