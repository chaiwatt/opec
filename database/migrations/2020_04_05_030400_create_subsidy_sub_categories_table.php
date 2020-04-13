<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsidySubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidy_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subsidy_categorie_id');
            $table->foreign('subsidy_categorie_id')->references('id')->on('subsidy_categories')->onDelete('cascade');
            $table->string('name',150);
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
        Schema::dropIfExists('subsidy_sub_categories');
    }
}
