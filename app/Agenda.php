<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'eventos';
    public $timestamps = false;
    

    protected $fillable = array ('IdEventos', 'Titulo', 'Descricao', 'DataInicio', 'DataFim','Mes');
    protected $primaryKey = 'IdEventos';

}
