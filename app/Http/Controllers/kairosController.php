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
use Carbon\Carbon;

class kairosController extends Controller
{
    public function __construct(){
        $this->middleware('KairosMiddleware', ['only' =>['menu']]);
    }
    
    public function index(){
        return view('general.index');
    }

    public function menu(){
        $fiveteen = Carbon::today();
        $fiveteen ->addDays(15);
        $NoteAgenda = DB::table('eventos')
            ->select('DataInicio')
            ->where('Idusuario', Auth::id())
            ->where('DataInicio','<',$fiveteen)
            ->get();
        
        return view('general.menuKairos',['NotasAgenda' => $NoteAgenda]);
    }
    
    
    

}
