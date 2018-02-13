<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesBoissonsId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('ventes',function(Blueprint $table){
            $table->integer('boissons_id')->unsigned();
            $table->foreign('boissons_id')->references('id')->on('boissons')->onDelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('ventes',function(Blueprint $table){
            $table->dropForeign('ventes_boissons_id_foreign');
        });
    }
}
