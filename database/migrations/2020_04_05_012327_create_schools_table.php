<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->char('code',10);
            $table->unsignedBigInteger('provincial_sub_area_education_id');
            $table->unsignedBigInteger('school_type_id');
            $table->string('name',30);
            $table->unsignedBigInteger('school_director_id');
            $table->char('moo',10);
            $table->string('soi',150)->nullable();
            $table->string('road',150)->nullable();
            $table->string('address',250);
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('amphur_id');
            $table->unsignedBigInteger('tambol_id');
            $table->unsignedBigInteger('school_status_id');
            $table->unsignedBigInteger('school_license_id')->nullable();
            $table->char('potalcode',5);
            $table->string('email',100);
            $table->string('phone',100);
            $table->string('website',250);
            $table->string('picture',250);
            $table->string('fax',20)->nullable();
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
        Schema::dropIfExists('schools');
    }
}
