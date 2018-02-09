<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoissonsId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boissons', function (Blueprint $table) {
    $table->renameColumn('idBoissons', 'id');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('boissons', function (Blueprint $table) {
    $table->renameColumn('id', 'idBoissons');
});
    }
}
