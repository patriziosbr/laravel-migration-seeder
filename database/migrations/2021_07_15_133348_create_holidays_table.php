<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('nome_struttura', 50);
            $table->string('citta', 50);
            $table->string('stato', 50);
            $table->string('cap', 10);
            $table->string('via', 100);
            $table->unsignedTinyInteger('voto');
            $table->text('descrizione');
            $table->text('recensione')->nullable();
            $table->string('partenza', 100);
            $table->string('destinazione', 100);
            $table->boolean('cancellazione_gratis')->default(1);
            $table->float('prezzo', 7, 2); //99999,99
            $table->unsignedTinyInteger('posti_disponibili');
            $table->unsignedTinyInteger('sconto')->default(0);
            $table->date('andata');
            $table->date('ritorno');
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
        Schema::dropIfExists('holidays');
    }
}
