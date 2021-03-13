<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_admins', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->string('adresse_ar');
            $table->integer('telephone');
            $table->integer('telephone2')->nullable();
            $table->integer('fax')->nullable();
            $table->integer('telephonefixe')->nullable();
            $table->float('gèolocalisation_lat');
            $table->float('gèolocalisation_log');
            $table->string('tempstravail_fr');
            $table->string('tempstravail_en');
            $table->string('tempstravail_ar');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
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
        Schema::dropIfExists('about_admins');
    }
}
