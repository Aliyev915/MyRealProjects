<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name_az',50);
            $table->string('lastname_az',50);
            $table->string('name_en',50);
            $table->string('lastname_en',50);
            $table->string('name_ru',50);
            $table->string('lastname_ru',50);
            $table->string('profession_az',100);
            $table->string('profession_en',100);
            $table->string('profession_ru',100);
            $table->string('image',500);
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
