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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->string('client_name');
            $table->string('nom_responsable');
            $table->string('prenom_responsable');
            $table->string('email_responsable');
            $table->string('telephone_responsable');
            $table->string('titre_projet');
            $table->text('description');
            $table->date('debut');
            $table->date('fin');
            $table->string('statut');
            $table->integer('jours_vendus');
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
        Schema::dropIfExists('projets');
    }
}
