<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetsnew', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('nom_responsable');
            $table->string('prenom_responsable');
            $table->string('email_responsable');
            $table->string('telephone_responsable');
            $table->string('titre');
            $table->text('description');
            $table->date('debut');
            $table->date('fin');
            $table->enum('statut', ['non demarre', 'en cours', 'termine']);
            $table->integer('jours_vendus');
            $table->timestamps();
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
