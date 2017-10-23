@extends('Layout.principal')

@section('title')
Horario
@endsection
@section('conteudo')





<div class="container">
  <h2>Condensed Table</h2>
  <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th><div class="poscentralized">Horario</div></th>
        <th><div class="poscentralized">Segunda</div></th>
        <th><div class="poscentralized">Terça</div></th>
        <th><div class="poscentralized">Quarta</div></th>
        <th><div class="poscentralized">Quinta</div></th>
        <th><div class="poscentralized">Sexta</div></th>
        <th><div class="poscentralized">Sábado</div></th>
        <th><div class="poscentralized">Domingo</div></th>
      </tr>
    </thead>
    <body>
    <tr>
    <td></td>
    @foreach($horarios as $h)
      

        
        <td>

        @if (empty($h->dia)) <!-- Segunda -->
        <div class="boxconteudo poscentralized" style="cursor: pointer;"><a href="/horario/novo"><i class="glyphicon glyphicon-plus" ></i></a></div>
        @elseif($h->dia =="Segunda")
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
        @endif
        </td>

        </tr>


  @endforeach
      @stop
