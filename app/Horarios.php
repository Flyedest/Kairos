<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
protected $table = 'horario';
    public $timestamps = false;
    

    protected $fillable = array ('IdHorario', 'Titulo', 'Professor', 'Sala');
    protected $primaryKey = 'IdHorario';

    //protected $guarded = ['IdHorario'];
}
