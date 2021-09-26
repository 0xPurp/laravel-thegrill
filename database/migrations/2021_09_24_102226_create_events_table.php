<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('titreevents');
            $table->string('sous-titre');
            // Event 1
            $table->string('event1name');
            $table->string('dateevent1');
            $table->string('titreevent1');
            $table->text('descriptionevent1');
            // Event 2
            $table->string('event2name');
            $table->string('dateevent2');
            $table->string('titreevent2');
            $table->text('descriptionevent2');
            // Event 3
            $table->string('event3name');
            $table->string('dateevent3');
            $table->string('titreevent3');
            $table->text('descriptionevent3');
            // Event 4
            $table->string('event4name');
            $table->string('dateevent4');
            $table->string('titreevent4');
            $table->text('descriptionevent4');
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
        Schema::dropIfExists('events');
    }
}
