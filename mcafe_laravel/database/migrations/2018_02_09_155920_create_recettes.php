<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecettes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('recettes', function (Blueprint $table) {
    $table->dropColumn(['nomBoisson','nomIngredient']);
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::table('recettes', function (Blueprint $table) {
    $table->dropColumn(['nomBoisson', 'nomIngredient']);
});
    }
}
