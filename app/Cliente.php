<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
     use   SoftDeletes;
        protected $table = 'cliente';
    
        protected $filiable=['nome','idade','sexo','bairro','distrito','bi'];
        protected $dates = ['deleted_at'];
}
