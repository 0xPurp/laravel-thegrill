<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('titremenu');
            $table->string('sous_titre');
            
            // Row 1
            $table->string('titrerow1');
            $table->string('titreitem1');
            $table->string('prixitem1');
            $table->string('descriptionitem1');

            // Row 2
            $table->string('titrerow2');
            $table->string('titreitem2');
            $table->string('prixitem2');
            $table->string('descriptionitem2');

            // Row 3
            $table->string('titrerow3');
            $table->string('titreitem3');
            $table->string('prixitem3');
            $table->string('descriptionitem3');

            // Big Row 1 
            $table->string('titrebigrow1');

            // Item Big Row 1
            $table->string('photoitem1');
            $table->string('titrebigitem1');
            $table->string('prixbigrow1');
            $table->string('descriptionbigrow1');

            // Item Big Row 2
            $table->string('photoitem2');
            $table->string('titrebigitem2');
            $table->string('prixbigrow2');
            $table->string('descriptionbigrow2');

            // Item Big Row 3
            $table->string('photoitem3');
            $table->string('titrebigitem3');
            $table->string('prixbigrow3');
            $table->string('descriptionbigrow3');

            // Item Big Row 4
            $table->string('photoitem4');
            $table->string('titrebigitem4');
            $table->string('prixbigrow4');
            $table->string('descriptionbigrow4');

            // Big Row 2
            $table->string('titrebigrow2');

            // Item Big Row 5
            $table->string('photoitem5');
            $table->string('titrebigitem5');
            $table->string('prixbigrow5');
            $table->string('descriptionbigrow5');

            // Item Big Row 6
            $table->string('photoitem6');
            $table->string('titrebigitem6');
            $table->string('prixbigrow6');
            $table->string('descriptionbigrow6');

            // Item Big Row 7
            $table->string('photoitem7');
            $table->string('titrebigitem7');
            $table->string('prixbigrow7');
            $table->string('descriptionbigrow7');

            // Item Big Row 8
            $table->string('photoitem8');
            $table->string('titrebigitem8');
            $table->string('prixbigrow8');
            $table->string('descriptionbigrow8');


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
        Schema::dropIfExists('menus');
    }
}
