<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincialSubAreaEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincial_sub_area_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provincial_education_id');
            $table->foreign('provincial_education_id')->references('id')->on('provincial_education')->onDelete('cascade');
            $table->string('name',150)->comment('เขตพื้นที่');
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
        Schema::dropIfExists('provincial_sub_area_education');
    }
}
