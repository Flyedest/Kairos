<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horas extends Model
{
  protected $table = 'horas';
    public $timestamps = false;
    

    protected $fillable = array ('id, horainicio,horafim');
    protected $primaryKey = 'id';
    

    //protected $guarded = ['id'];
}
