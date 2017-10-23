@extends('Layout.principal')

@section('title')
Horario
@endsection
@section('conteudo')

<div class="poscentralized">
  <div class="horario">
    <h2>Horário</h2>
    <h2 align="center">Manhã</h2>
    <table class="table">
      <tr>
        <th>Horario</th>
        <th>Segunda</th>
        <th>terça</th>
        <th>Quarta</th>
        <th>Quinta</th>
        <th>Sexta</th>
        <th>Sábado</th>
        <th>Domingo</th>

      </tr>
      
      @foreach($horarios as $h)
        <!-- Tudo abaixo é somente uma tabela -->
        @if($h ->dia =="Segunda")
      <tr>

        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
             <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover">Remover</a></li>
      
    </ul>
  </div>
                
                  
              <div class="boxtitle">
                <h5>{{$h ->horario}}</h5>

              </div>

            </div>
          </div>
        </td>
          
        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                <h6>{{$h ->dia}}</h6>
              </div>

            </div>
          </div>
        </td>
        
     
        
        
        
        @elseif($h ->dia =="Terça")
          
        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                <h6>{{$h ->dia}}</h6>
              </div>

            </div>
          </div>
        </td>
        
    
         @elseif($h ->dia =="Quarta")
        
          
        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                <h6>{{$h ->dia}}</h6>
              </div>

            </div>
          </div>
        </td>
        
      @elseif($h ->dia =="Quinta")

          
        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                <h6>{{$h ->dia}}</h6>
              </div>

            </div>
          </div>
        </td>
           @elseif($h ->dia =="Sexta")
        
          
        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                <h6>{{$h ->dia}}</h6>
              </div>

            </div>
          </div>
        </td>
           @elseif($h ->dia =="Sábado")
        
          
        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                <h6>{{$h ->dia}}</h6>
              </div>

            </div>
          </div>
        </td>
           @elseif($h ->dia =="Domingo")
        
          
        <td>
          <div class="poscentralized">
            <div class="Boxconteudo">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="#">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                <h6>{{$h ->dia}}</h6>
              </div>

            </div>
          </div>
        </td>
        @endif
        
        <!-- Até aqui -->
      @endforeach
    </table>
      
      <div class="poscentralized">
          <div class="btn btn-default"><a href="/horario/novo">Criar novo</a></div>
      </div>

      @stop
