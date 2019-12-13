<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruteurs', function (Blueprint $table) {
            $table->bigIncrements('idRecruteur')->unique();
            $table->enum('type',['public','prive']);
            $table->string('nom');
            $table->string('email');
            $table->string('password');
            $table->string('logo');
            $table->string('adress');
            $table->string('num_tel');
            $table->string('site_web');
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
        Schema::dropIfExists('recruteurs');
    }
}
