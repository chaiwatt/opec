<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('provincial_educatio_typ_id')->nullable();
            // $table->unsignedBigInteger('provincial_education_id')->nullable();
            // $table->unsignedBigInteger('povincial_edcation_position_id')->nullable();
            $table->unsignedBigInteger('prefix_id')->default(1);
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('address')->nullable();
            $table->unsignedBigInteger('provincial_education_id')->default(0);
            $table->unsignedBigInteger('provincial_sub_area_education_id')->default(0);
            $table->unsignedBigInteger('school_id')->default(0);
            $table->unsignedBigInteger('user_type_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('amphur_id')->nullable();
            $table->unsignedBigInteger('tambol_id')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('picture',250)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
