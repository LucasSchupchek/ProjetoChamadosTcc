<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            // $table->integer('id_usuario')->unsigned();
            // $table->foreign('id_usuario')->references('id')->on('users');
            // $table->integer('id_organizacao')->unsigned();
            // $table->foreign('id_organizacao')->references('id')->on('organizations');
            // $table->integer('id_prioridade')->unsigned();
            // $table->foreign('id_prioridade')->references('id')->on('prioridades')->nullable();
            // $table->integer('id_problema')->unsigned();
            // $table->foreign('id_problema')->references('id')->on('problemas')->nullable();
            // $table->integer('id_status')->unsigned();
            // $table->foreign('id_status')->references('id')->on('statuses');
            // $table->integer('id_responsavel')->unsigned();
            // $table->foreign('id_responsavel')->references('id')->on('users')->nullable();
            $table->text('anexo')->nullable();
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
        Schema::dropIfExists('chamados');
    }
}
