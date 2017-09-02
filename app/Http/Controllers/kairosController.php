<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requests;
use App\Horarios;
use Request;


class kairosController extends Controller
{
    public function index(){
        return view('/general/index');
    }

    public function horario(){
      $horarios = Horarios::all();
      return view('/general/horario')
      ->withHorarios($horarios);
    }
    
    public function novoHorario(){
        return view('/general/novoHorario');
    }
    public function addHorario(){
        
        $Titulo = Request::input('Titulo');
        $Professor = Request::input('Professor');
        $sala = Request::input('Sala');
        $Dia = Request::input('Dia');
        $Hora = Request::input('Hora');
        $idusuario = 1;
        DB::insert('insert into horario (Titulo,Professor,Sala,horario,Idusuario,dia) values(?,?,?,?,?,?)', array($Titulo,$Professor,$sala,$Hora,$idusuario,$Dia));
      
        return redirect()
            ->action('kairosController@horario');
    }
    
    public function remove($id){
        $horarios = Horarios::find($id);
        $horarios ->delete();
        return redirect()
            ->action('kairosController@horario');
    }
}
