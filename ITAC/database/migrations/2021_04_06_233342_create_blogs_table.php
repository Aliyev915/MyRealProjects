<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title_az',150);
            $table->string('description_az',1500);
            $table->string('title_en',150);
            $table->string('description_en',1500);
            $table->string('title_ru',150);
            $table->string('description_ru',1500);
            $table->string('quote_az',250);
            $table->string('quote_en',250);
            $table->string('quote_ru',250);
            $table->string('slug');
            $table->integer('category_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('blogs');
    }
}
