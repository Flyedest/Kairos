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


class kairosController extends Controller
{
    
    public function index(){
        return view('general.index');
    }

    public function horario(){
      $horarios = Horarios::all();
      $horas = Horas::all();
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
      
        
        
//        $editar = Horarios::find($id);
//        $editare = $editar[IdHorario];
//        
//        return view::make('general.edithorario', compact ('editare'));//Passando a variavel com seu valor para a view edithorario.blade.php
        
        
//        $NovoHorario = Horarios::find($id);
//       global $global = $NovoHorario;
//        
//        //não tá passando daqui
//		return view ('general.edithorario');
////            ->withHorarios($NovoHorario);
        $editar = Horarios::find($id);
         return view::make('general.editHorario',compact('editar'));
                
  }
    
    public function atualizarhorario(){
        $editar = new Horarios;
        $id = Request::input('IdHorario');
        $editar ->IdHorario = Horarios::find($id);
        $editar ->Titulo = Request::input('Titulo') ;
        $editar ->Professor = Request::input('Professor');
        $editar ->sala = Request::input('Sala');
        $editar ->save();
        
    

        
        //Abaixo quaaaase deu certo
//        $Titulo = Request::input('Titulo');
//        $Professor = Request::input('Professor');
//        $sala = Request::input('Sala');
//        $Dia = Request::input('Dia');
//        $idusuario = 1;
//        DB::update('update horario set Titulo = ? , Professor = ? , sala = ? , Dia = ? where IdHorario = ?', array($Titulo , $Professor , $sala, $Dia , $id));
        
        
        // tentativa 13
//         DB::table('horario')
//            ->where('IdHorario', $id)
//            ->update([
//                'Titulo' => $Titulo,
//                'Professor' => $Professor,
//                'sala' => $sala
//            ]);
//       //Tentativa 15
//        $editare ->IdHorario = Request::input('IdHorario');
//        $editare ->Titulo = Request::input('Titulo') ;
//        $editare ->Professor = Request::input('Professor');
//        $editare ->sala = Request::input('Sala');
//        $editare->save();
//        
//  
//      
//        //Tentativa 08
////        $IdHorario = Request::input('IdHorario')->get();
//		$Titulo= Request::input('Titulo');
//		$Professor  = Request::input('Professor');
//		$sala      = Request::input('Sala');
//        $id         = global $global;
//        dd($id);
//		
//        //Tentativa 18
//        DB::table('horario')
//            ->where('IdHorario', $id)
//            ->update([
//                'Titulo' => $Titulo,
//                'Professor' => $Professor,
//                'sala' => $sala
//            ]);
//        return redirect() 
//            ->action('kairosController@horario');
        
        
//        ESSA BUDEGA AI DE CIMA TA BUGADO e eu to ficando puto
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
