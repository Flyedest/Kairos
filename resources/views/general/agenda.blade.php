@extends('Layout.principal')
@section('Back')
    <a href="/menu">Voltar</a>
    @endsection
@section('content')


    <a href="/agenda/novo" class="ButtonNew poscentralized"><div ><i class="glyphicon glyphicon-plus"></i></div></a>
        
    <div class="poscentralized">
        <div class="forma"style="width:600px;">

        <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Janeiro</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="01")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
           <!-- Fevereiro --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Fevereiro</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="02")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Março --> 
            
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Março</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="03")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Abril --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        Abril</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="04")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Maio --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Maio</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse ">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="05")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            <!-- Junho --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        Junho</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="06")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Julho --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        Julho</a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse ">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="07")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Agosto --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
        Agosto</a>
      </h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="08")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Setembro --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
        Setembro</a>
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="09")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Outubro --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
        Outubro</a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="10")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Novembro --> 
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
        Novembro</a>
      </h4>
    </div>
    <div id="collapse11" class="panel-collapse collapse ">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="11")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            
            <!-- Dezembro --> 
            
            
            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
        Dezembro</a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table Janeiro">
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
            <th>Opções</th>
            </tr>
        @foreach($agenda as $e)
            @if($e->Mes=="12")
            <tr>
                    <td>{{$e ->Titulo}}</td>
                    <td>{{$e ->Descricao}}</td>
                    <td>{{$e ->DataInicio}}</td>
                    <td>{{$e ->DataFim}}</td>
                <td><a href="/agenda/remover/{{ $e->IdEventos }}">Remover</a></td>
            </tr>
            @endif
        @endforeach
    </table>
        </div>
    </div>
  </div>
            

  


            </div>
        
</div>
</div>
    
    
    

@stop