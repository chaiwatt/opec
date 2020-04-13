<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocationTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocation_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('subsidy_category_id');
            $table->unsignedBigInteger('provincial_education_id')->nullable();
            $table->unsignedBigInteger('provincial_sub_area_education_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->double('budget',15,2);
            $table->char('allocation_type',1);
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
        Schema::dropIfExists('allocation_transactions');
    }
}
