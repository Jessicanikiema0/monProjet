<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Secretaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretaire', function (Blueprint $table) {
            $table->string('id_secretaire')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('telportable');
            $table->integer('telmobile');
            $table->string('email')->unique();
            $table->string('rue');
            $table->string('ville');
            $table->string('pays');
            $table->string('sexe');
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
        Schema::dropIfExists('secretaire');
    }
}
