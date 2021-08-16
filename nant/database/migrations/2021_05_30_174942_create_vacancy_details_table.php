<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_details', function (Blueprint $table) {
            $table->id();
            $table->integer('experience');
            $table->string('education_az',150);
            $table->string('education_en',150);
            $table->string('education_ru',150);
            $table->string('responsibility_az',1000);
            $table->string('responsibility_en',1000);
            $table->string('responsibility_ru',1000);
            $table->string('requirement_az',1000);
            $table->string('requirement_en',1000);
            $table->string('requirement_ru',1000);
            $table->decimal('salary',10,2);
            $table->string('guarantee_az',500);
            $table->string('guarantee_en',500);
            $table->string('guarantee_ru',500);
            $table->string('graphic_az',100);
            $table->string('graphic_en',100);
            $table->string('graphic_ru',100);
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
        Schema::dropIfExists('vacancy_details');
    }
}
