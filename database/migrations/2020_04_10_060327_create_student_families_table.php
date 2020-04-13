<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_families', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('father_prefix_id');
            $table->string('father_name',100)->nullable();
            $table->string('father_lastname',100)->nullable();
            $table->string('father_career',100)->nullable();
            $table->string('father_phone',100)->nullable();
            $table->string('father_email',100)->nullable();
            $table->unsignedBigInteger('mother_prefix_id')->nullable();
            $table->string('mother_name',100)->nullable();
            $table->string('mother_lastname',100)->nullable();
            $table->string('mother_career',100)->nullable();
            $table->string('mother_phone',100)->nullable();
            $table->string('mother_email',100)->nullable();
            $table->unsignedBigInteger('parent_prefix_id')->nullable();
            $table->string('parent_name',100)->nullable();
            $table->string('parent_lastname',100)->nullable();
            $table->string('parent_career',100)->nullable();
            $table->string('parent_phone',100)->nullable();
            $table->string('parent_email',100)->nullable();
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
        Schema::dropIfExists('student_families');
    }
}
