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
            $table->text('descriptiondroite');
            $table->string('notesdroite');
            $table->string('titrebook');
            $table->text('descriptionbook');
            $table->string('titremenu');
            $table->text('descriptionmenu');
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
