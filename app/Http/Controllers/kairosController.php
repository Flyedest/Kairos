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

class kairosController extends Controller
{
    
    private $usuario;
    
    public function __construct(){
        $this->middleware('auth');
        $this->middleware(function($request,$next){
            $this->usuario = auth()->user();
            
            return $next($request);
        });
    }
    
    public function index(){
        return view('general.index');
    }

    public function horario(){
        
        $user = User::where('user_id',$this->usuario->id)->get();
        
      $horarios = Horarios::all();
      $horas = DB::table(DB::raw('horas'))
          ->select('horainicio','horafim')
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
        $idusuario = 1;
        DB::insert('insert into horario (Titulo,Professor,Sala,Idusuario,dia) values(?,?,?,?,?)', array($Titulo,$Professor,$sala,$idusuario,$Dia));
      
        return redirect()
            ->action('kairosController@horario');
    }
    
    
     public function novahora(){
        return view('general.SetHora');
    }
    public function addhora(){
        $horainicio = Request::input('horainicio');
        $horafim = Request::input('horafim');
        
        DB::insert('insert into horas (horainicio,horafim) values (?,?)',array($horainicio,$horafim));
        return redirect()
            ->action('kairosController@horario');
    }
    public function editarhorario($id){
      
        
        $editar = Horarios::find($id);
         return view::make('general.editHorario',compact('editar'));
                
  }
    
    public function atualizarhorario(){
        $id = Request::input('IdHorario');
        $editar = Horarios::find($id);
        $editar ->Titulo = Request::input('Titulo') ;
        $editar ->Professor = Request::input('Professor');
        $editar ->sala = Request::input('Sala');
        $editar ->save();
        
        return  redirect()
            ->action('kairosController@horario');

    }
    public function remove($id){
        $horarios = Horarios::find($id);
        $horarios ->delete();
        return redirect()
            ->action('kairosController@horario');
    }
    
    
    public function menu(){
        return view('general.menuKairos');
    }
    
    
    public function agenda(){
        $agenda = Agenda::all();
        return view ('general.agenda') 
            ->withAgenda($agenda);
    }
    public function novaagenda(){
        return view('general.novaagenda');
    }
    public function addagenda(){
        $Titulo = Request::input('Titulo');
        $Descricao = Request::input('Descricao');
        $DataInicio = Request::input('DataInicio');
        $Mes = date( 'm', strtotime( $DataInicio ));
        
        $DataFim = Request::input('DataFim');
        $idusuario = 1;
        DB::insert('insert into eventos (Titulo,Descricao,DataInicio,DataFim,Idusuario,Mes) values(?,?,?,?,?,?)', array($Titulo,$Descricao,$DataInicio,$DataFim,$idusuario,$Mes));
         return redirect()
            ->action('kairosController@agenda');
    }
    public function removeagenda($id){
        $agenda = Agenda::find($id);
        $agenda ->delete();
        return redirect()
            ->action('kairosController@agenda');
    }
    
    

}
