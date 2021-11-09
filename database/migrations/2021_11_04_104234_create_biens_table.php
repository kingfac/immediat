<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('salon');
            $table->integer('chambre');
            $table->string('etat');
            $table->string('equipe');
            $table->string('adresse');
            $table->string('prix');
            $table->string('devise');
            $table->string('valide');
            $table->foreignId('client_id')->constrained('clients');
            $table->string('ville');
            $table->foreignId('type_annonce_id')->constrained('type_annonces');
            $table->foreignId('type_bien_id')->constrained('type_biens');
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
        Schema::dropIfExists('biens');
    }
}
