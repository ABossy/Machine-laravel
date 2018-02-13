<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRecettes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recettes',function(Blueprint $table){
    
            $table->foreign('idBoisson')->references('id')->on('boissons')->onDelete('restrict');

            $table->foreign('idIngredient')->references('id')->on('ingredients')->onDelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recettes', function(Blueprint $table){

            $table->dropForeign(['idBoisson',
                                'idIngredient']);

        });
    }
}
