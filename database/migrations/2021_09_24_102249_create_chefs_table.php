<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous-titre');

            // Chef 1
            $table->string('photochef1');
            $table->string('namechef1');

            // Chef 2
            $table->string('photochef2');
            $table->string('namechef2');

            // Chef 3
            $table->string('photochef3');
            $table->string('namechef3');

            // Chef 4
            $table->string('photochef4');
            $table->string('namechef4');

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
        Schema::dropIfExists('chefs');
    }
}
