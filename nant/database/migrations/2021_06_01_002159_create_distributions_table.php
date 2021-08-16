<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->id();
            $table->integer('manager')->default(0);
            $table->integer('supervisor')->default(0);
            $table->integer('merchandiser')->default(0);
            $table->integer('supplier')->default(0);
            $table->integer('sailor')->default(0);
            $table->integer('track')->default(0);
            $table->integer('supervisor_merch')->default(0);
            $table->unsignedBigInteger('region_id');
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
        Schema::dropIfExists('distributions');
    }
}
