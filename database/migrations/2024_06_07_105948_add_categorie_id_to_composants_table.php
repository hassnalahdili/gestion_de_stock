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
        Schema::table('composants', function (Blueprint $table) {
            
                $table->unsignedBigInteger('categorie_id')->nullable()->after('name');
                $table->foreign('categorie_id')->references('id')->on('categories');
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('composants', function (Blueprint $table) {
            //
        });
    }
};
