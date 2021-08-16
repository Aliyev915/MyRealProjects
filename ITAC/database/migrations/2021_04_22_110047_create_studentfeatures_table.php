<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentfeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentfeatures', function (Blueprint $table) {
            $table->id();
            $table->integer('continuity');
            $table->integer('teorics');
            $table->integer('practics');
            $table->integer('course_work');
            $table->integer('exam');
            $table->dateTime('begining_time');
            $table->dateTime('last_time');
            $table->integer('student_id');
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
        Schema::dropIfExists('studentfeatures');
    }
}
