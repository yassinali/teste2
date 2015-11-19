<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membros';
    
    protected $filiable=['nome','cargo','username'];
}
