<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('lastname',50)->nullable();
            $table->string('birthplace',50);
            $table->dateTime('birthday');
            $table->string('citizenship',50);
            $table->string('nationality',50);
            $table->string('gender',50);
            $table->string('martial_status',50);
            $table->string('military_service',50);
            $table->string('driving_license',50);
            $table->string('phone',20);
            $table->string('mobile',20);
            $table->string('email',100);
            $table->string('position_is_want')->nullable();
            $table->string('sector_is_want')->nullable();
            $table->boolean('external_work')->default(false);
            $table->boolean('is_working')->default(false);
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
        Schema::dropIfExists('persons');
    }
}
