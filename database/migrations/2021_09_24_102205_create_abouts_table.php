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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous-titre');
            $table->string('titregauche');
            $table->string('descriptiongauche');
            $table->string('notesgauche');
            $table->string('titredroite');
            $table->string('descriptiondroite');
            $table->string('notesdroite');
            $table->string('titrebook');
            $table->string('descriptionbook');
            $table->string('titremenu');
            $table->string('descriptionmenu');
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
        Schema::dropIfExists('abouts');
    }
}
