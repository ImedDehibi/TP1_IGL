<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Presences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Nom');
            $table->string('Prenom');
            $table->integer('Bureau');
            $table->date('Date');
            $table->time('Debut');
            $table->time('Fin');
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
        Schema::dropIfExists('presences');
    }
}
