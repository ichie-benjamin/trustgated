<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('visibility')->default(0)->after('availability');
            $table->string('job_type')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('affirmative_category')->nullable();
            $table->text('affirmative_description')->nullable();
            $table->boolean('physically_challenged')->default(0);
            $table->string('usa_work_permit')->nullable();
            $table->string('country_work_permit')->nullable();
            $table->string('language1')->nullable();
            $table->string('language1_proficiency')->nullable();
            $table->text('language1_rws')->nullable();
            $table->string('language2')->nullable();
            $table->string('language2_proficiency')->nullable();
            $table->text('language2_rws')->nullable();
            $table->string('language3')->nullable();
            $table->string('language3_proficiency')->nullable();
            $table->text('language3_rws')->nullable();
            $table->text('it_skills')->nullable();
        });
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['visibility','job_type','employment_status','affirmative_category','affirmative_description','physically_challenged','usa_work_permit','country_work_permit',
            'language1',
'language1_proficiency',
'language1_rws',
'language2',
'language2_proficiency',
'language2_rws',
'language3',
'language3_proficiency',
'language3_rws','it_skills'
            ]);
        });
    }
}
