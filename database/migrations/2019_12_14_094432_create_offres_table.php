<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule');
            $table->enum('type_contract',['stage','cdi','cdd','freelance']);
            $table->string('domaine');
            $table->string('diplome');
            $table->string('nmbr_annee_exp');
            $table->string('description');
            $table->string('lieu_de_travail');
            $table->string('competence');

            $table->string('salaire');
            $table->date('date_de_depot');
            $table->date('date_de_debut');
            $table->enum('statut',['publiee','retiree','attente' ]);
            $table->string('duree');
            $table->unsignedbigInteger('idRec');
            $table->foreign('idRec')->references('id')->on('recruteurs');
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
        Schema::dropIfExists('offres');
    }
}
