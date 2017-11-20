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
use Auth;
use App\User;
use Carbon\Carbon;


class AgendaController extends Controller
{
   public function __construct(){
        $this->middleware('KairosMiddleware');
    }
   public function agenda(){
        $agenda = Agenda::where('IdUsuario', Auth::id())->get();
       
        return view ('general.agenda') 
            ->withAgenda($agenda);
    }
    public function novaagenda(){
        return view('general.novaagenda');
    }
    public function addagenda(){
        $idUser = Auth::id();
        $Titulo = Request::input('Titulo');
        $Descricao = Request::input('Descricao');
        $DataInicio = Request::input('DataInicio');
        $Mes = date( 'm', strtotime( $DataInicio ));
        
        $DataFim = Request::input('DataFim');
        
        DB::insert('insert into eventos (Titulo,Descricao,DataInicio,DataFim,Idusuario,Mes) values(?,?,?,?,?,?)', array($Titulo,$Descricao,$DataInicio,$DataFim,$idUser,$Mes));
         return redirect()
            ->action('AgendaController@agenda');
    }
    public function removeagenda($id){
        $agenda = Agenda::find($id);
        $agenda ->delete();
        return redirect()
            ->action('AgendaController@agenda');
    }
    public function editarAgenda($id){
        $id = Agenda::find($id);
        return view('general.editAgenda',['id'=>$id ->IdEventos]);
    }
    public function atualizarAgenda(){
    
        $id = Request::input('id');
        
        
        $editar = Agenda::find($id);
        $editar = Request::all();
//        $editar ->horainicio = Request::input('horain');
//        $editar ->horafim = Request::input('horafim');
        
        $editar ->save();
        
        return  redirect()
            ->action('HorarioController@agenda');
    }
}
