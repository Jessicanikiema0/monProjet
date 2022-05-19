<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medecin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecin', function (Blueprint $table) {
            $table->string('id_medecin')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('telportable');
            $table->integer('telmobile');
            $table->string('rue');
            $table->string('ville');
            $table->string('pays');
            $table->string('sexe');
            $table->string('specialite');
            $table->string('email')->unique();
            $table->string('username');
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
        Schema::dropIfExists('medecin');
    }
}
