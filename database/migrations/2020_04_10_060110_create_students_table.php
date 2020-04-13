<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->char('hid',13)->nullable();
            $table->unsignedBigInteger('prefix_id');
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->string('name',100);
            $table->string('lastname',100);
            $table->date('dob');
            $table->unsignedBigInteger('class_level_id');
            $table->unsignedBigInteger('class_room_id');
            $table->unsignedBigInteger('blood_id')->nullable();
            $table->unsignedBigInteger('drug_allegy_id')->nullable();
            $table->unsignedBigInteger('food_allegy_id')->nullable();
            $table->unsignedBigInteger('nationality_id')->default(1);
            $table->unsignedBigInteger('ethnicity_id')->default(1);
            $table->unsignedBigInteger('religion_id')->default(1);
            $table->text('address')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->string('picture',250)->nullable();
            $table->unsignedBigInteger('amphur_id')->nullable();
            $table->unsignedBigInteger('tambol_id')->nullable();
            $table->string('phone',15)->nullable();
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
        Schema::dropIfExists('students');
    }
}
