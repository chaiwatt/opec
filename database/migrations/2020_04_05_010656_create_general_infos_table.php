<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_infos', function (Blueprint $table) {
            $table->id();
            $table->string('company',150)->comment('ชื่อหน่วยงาน เช่น คณะกกรมการส่งเสริมการศึกษาเอกชน');
            $table->string('logo',250)->nullable();
            $table->string('phone',50);
            $table->string('fax',50);
            $table->string('email',200);
            $table->text('address');
            $table->string('lat',100)->nullable();
            $table->string('lng',100)->nullable();
            $table->string('facebookpage',150)->nullable();
            $table->string('youtube',150)->nullable();
            $table->string('twitter',150)->nullable();
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
        Schema::dropIfExists('general_infos');
    }
}
