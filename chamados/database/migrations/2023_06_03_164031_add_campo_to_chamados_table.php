<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampoToChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chamados', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prioridade')->unsigned();
            // $table->foreign('id_prioridade')->references('id')->on('prioridades')->nullable();
            $table->unsignedBigInteger('id_problema')->unsigned();
            // $table->foreign('id_problema')->references('id')->on('problemas')->nullable();
            $table->unsignedBigInteger('id_status')->unsigned();
            // $table->foreign('id_status')->references('id')->on('statuses');
            $table->unsignedBigInteger('id_responsavel')->nullable();
            // $table->foreign('id_responsavel')->references('id')->on('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chamados', function (Blueprint $table) {
            $table->dropColumn('id_prioridade');
            $table->dropColumn('id_problema');
            $table->dropColumn('id_status');
            $table->dropColumn('id_responsavel');
        });
    }
}
