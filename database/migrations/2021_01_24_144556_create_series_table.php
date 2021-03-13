<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categories_admins');
            $table->string('name_fr')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('img_serie');
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
        Schema::dropIfExists('series');
    }
}
