<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name_en');
            $table->text('name_ar');
            $table->text('title_en');
            $table->text('title_ar');
            $table->integer('reviews');
            $table->tinyInteger('rate');
            $table->text('spec_en');
            $table->text('spec_ar');
            $table->smallInteger('fees');
            $table->text('sessions');
            $table->text('general_spec');
            $table->string('male');
            $table->string('img_url');
            $table->dateTime('available_from');
            $table->dateTime('available_to');
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
        Schema::dropIfExists('doctors');
    }
}
