<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tarefas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designacao',60);
            $table->text('descricao');
            $table->date('prazo');
            $table->integer('idMembro')->unsigned();
           
        });
         Schema::table('tarefas', function(Blueprint $table) 
    {
         $table->foreign('idMembro')
            ->references('id')
            ->on('membros')
            ->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('tarefas');
    }
}
