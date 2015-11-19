<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefas';
    protected $filiable=[
        'designacao','descricao','prazo','idMembro'
    ];
}
