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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fournisseur_id')->nullable();
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs');
            $table->unsignedBigInteger('composant_id')->nullable();
            $table->foreign('composant_id')->references('id')->on('composants');
            $table->unsignedBigInteger('quantite');
           //$table->decimal('prix');
            $table->date('date');
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
        Schema::dropIfExists('achats');
    }
};
