<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo',500);
            $table->string('linkedin',100)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('youtube',100)->nullable();
            $table->string('adress_az',100);
            $table->string('adress_en',100);
            $table->string('adress_ru',100);
            $table->string('phone_1',20);
            $table->string('phone_2',20)->nullable();
            $table->string('phone_3',20)->nullable();
            $table->string('email',100)->unique();
            $table->string('copyright_az',150);
            $table->string('copyright_en',150);
            $table->string('copyright_ru',150);
            $table->string('map',500);
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
        Schema::dropIfExists('settings');
    }
}
