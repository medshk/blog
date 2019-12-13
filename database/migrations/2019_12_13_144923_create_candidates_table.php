<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('idCandidate')->unique();
            $table->enum('civilite', ['Mr','Mme','Mlle', 'Dr','Pr']);
            $table->string('nom');
            $table->date('date_naissance');
            $table->string('prenom',45);
            $table->string('email');
            $table->string('password');
            $table->string('photo');
            $table->string('adress');
            $table->string('num_tel');
            $table->string('lien_linkedin');
           
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
        Schema::dropIfExists('candidates');
    }
}
