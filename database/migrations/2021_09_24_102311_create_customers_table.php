<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous-titre');

            // Commentaire 1
            $table->string('photocommentaire1');
            $table->string('nomcommentaire1');
            $table->string('commentaire1');

            // Commentaire 2
            $table->string('photocommentaire2');
            $table->string('nomcommentaire2');
            $table->string('commentaire2');

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
        Schema::dropIfExists('customers');
    }
}
