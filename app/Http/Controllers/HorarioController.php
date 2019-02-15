<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requests;
use App\Horarios;
use App\Agenda;
use App\Horas;
use Request;
use View;
use Input;
use App\User;
use Auth;


class HorarioController extends Controller
{
    public function __construct(){
        $this->middleware('KairosMiddleware');
    }
  public function horario(){

      $idUser = Auth::id();
      $horarios = Horarios::where('Idusuario',$idUser)
                    ->get();
      
      $horas = Horas::where('Idusuario',$idUser)
          ->orderBy('horainicio')
          ->get();
        

      return view::make('general.horario', compact('horarios','horas'));
    }
    
    public function novoHorario(){
        return view('general.novoHorario');
    }
    public function addHorario(){
        
        $Titulo = Request::input('Titulo');
        $Professor = Request::input('Professor');
        $sala = Request::input('Sala');
        $Dia = Request::input('Dia');
        $idUser = Auth::id();
        
        DB::insert('insert into horario (Titulo,Professor,Sala,Idusuario,dia) values(?,?,?,?,?)', array($Titulo,$Professor,$sala,$idUser,$Dia));
      
        return redirect()
            ->action('HorarioController@horario');
    }
    
    
     public function novahora(){
        return view('general.SetHora');
    }
    public function addhora(){
        $idUser = Auth::id();
        $horainicio = Request::input('horainicio');
        $horafim = Request::input('horafim');
        
        DB::insert('insert into horas (horainicio,horafim,Idusuario) values (?,?,?)',array($horainicio,$horafim,$idUser));
        return redirect()
            ->action('HorarioController@horario');
    }
    public function editarhorario($id){
      
        
        $editar = Horarios::find($id);
         return view::make('general.editHorario',compact('editar'));
                
  }
    
    public function atualizarhorario(){
        $id = Request::input('IdHorario');
        $editar = Horarios::find($id);
        $editar ->Titulo = Request::input('Titulo');
        $editar ->Professor = Request::input('Professor');
        $editar ->sala = Request::input('Sala');
        $editar ->save();
        
        return  redirect()
            ->action('HorarioController@horario');

    }
    public function remove($id){
        $horarios = Horarios::find($id);
        $horarios ->delete();
        return redirect()
            ->action('HorarioController@horario');
    }
    public function removeHora($id){
        $horarios = Horas::find($id);
        $horarios ->delete();
        return redirect()
            ->action('HorarioController@horario');
    }
    public function editaHora($id){
        $id = Horas::find($id);
        return view('general.editHora',['id'=>$id ->id]);
    }
    public function atualizarhora(){
    
        $id = Request::input('id');
        
        
        $editar = Horas::find($id);
        $editar ->horainicio = Request::input('horain');
        $editar ->horafim = Request::input('horafim');
        
        $editar ->save();
        
        return  redirect()
            ->action('HorarioController@horario');
    }

}
