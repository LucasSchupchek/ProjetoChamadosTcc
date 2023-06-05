<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_setor')->nullable();
            // $table->foreign('id_setor')->references('id')->on('setores');
            $table->unsignedBigInteger('id_organizacao')->nullable();
            // $table->foreign('id_organizacao')->references('id')->on('organizations');
            $table->unsignedBigInteger('id_acesso')->nullable();
            // $table->foreign('id_acesso')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['id_setor']);
            $table->dropColumn('id_setor');
            $table->dropForeign(['id_organizacao']);
            $table->dropColumn('id_organizacao');
            $table->dropForeign(['id_acesso']);
            $table->dropColumn('id_acesso');
        });
    }
}