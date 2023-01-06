<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table-> string('description');
            $table-> string('status_juridique');
            $table->integer('capital');
            $table->string('numero_de_siret');
            $table->string('codeNAF');
            $table->string('adresse_siege_social');
            $table->string('pays');
            $table->string('adresse');
            $table->integer('code_postale');
            $table->string('ville');
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
        Schema::dropIfExists('clients');
    }
};
