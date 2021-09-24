<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous-titre');

            //Adress
            $table->string('titreadress');
            $table->string('nombatiment');
            $table->string('adresse');
            $table->string('phone');

            // Heures D'ouverture
            $table->string('titreouverture');
            $table->string('lundi');
            $table->string('mardi');
            $table->string('mercredi');
            $table->string('jeudi');
            $table->string('vendredi');
            $table->string('samedi');
            $table->string('dimanche');
            $table->string('heureslundi');
            $table->string('heuresmardi');
            $table->string('heuresmercredi');
            $table->string('heuresjeudi');
            $table->string('heuresvendredi');
            $table->string('heuressamedi');
            $table->string('heuresdimanche');
            
            // Copyright
            $table->string('copyright');
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
        Schema::dropIfExists('footers');
    }
}
