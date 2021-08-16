<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title_az');
            $table->string('description_az',500);
            $table->string('about_az',1500);
            $table->string('title_en');
            $table->string('description_en',500);
            $table->string('about_en',1500);
            $table->string('title_ru');
            $table->string('description_ru',500);
            $table->string('about_ru',1500);
            $table->string('image');
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
        Schema::dropIfExists('courses');
    }
}
