<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePovincialEdcationPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('povincial_edcation_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->comment('ตำแหน่ง สำนักงานศึกษาธิการจังหวัด');
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
        Schema::dropIfExists('povincial_edcation_positions');
    }
}
