<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('position_az',255);
            $table->string('position_ru',255);
            $table->string('position_en',255);
            $table->string('company',255);
            $table->dateTime('time');
            $table->unsignedBigInteger('vacancy_detail_id');
            $table->unsignedBigInteger('region_id');
            $table->foreign('vacancy_detail_id')->references('id')->on('vacancy_details');
            $table->foreign('region_id')->references('id')->on('regions');
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
        Schema::dropIfExists('vacancies');
    }
}
