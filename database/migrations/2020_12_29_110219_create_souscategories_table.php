<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSouscategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_categories_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_categorie')->nullable();
            $table->string('sous_categorie_fr')->nullable();
            $table->string('sous_categorie_en')->nullable();
            $table->string('sous_categorie_ar')->nullable();
            $table->string('director')->nullable();
            $table->string('director_ar')->nullable();
            $table->string('year')->nullable();
            $table->string('youtubelink')->nullable();
            $table->string('episode')->nullable();
            $table->string('season')->nullable();
            $table->string('client')->nullable();
            $table->string('client_ar')->nullable();
            $table->string('production')->nullable();
            $table->string('production_ar')->nullable();
            $table->string('production_executif')->nullable();
            $table->string('production_executif_ar')->nullable();
            $table->text('synopsis_fr')->nullable();
            $table->text('synopsis_en')->nullable();
            $table->text('synopsis_ar')->nullable();
            $table->text('scenario_fr')->nullable();
            $table->text('scenario_ar')->nullable();
            $table->text('scenario_en')->nullable();
            $table->string('agency_fr')->nullable();
            $table->string('agency_ar')->nullable();
            $table->text('project_fr')->nullable();
            $table->text('project_ar')->nullable();
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
        Schema::dropIfExists('sous_categories_admins');
    }
}
