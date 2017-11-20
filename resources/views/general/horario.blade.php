@extends('Layout.principal')
@section('Back')
    <a href="/menu">Voltar</a>
    @endsection
@section('title')
Horario
@endsection
@section('content')

<div class="poscentralized">
<a href="/horario/novo" class="btn btn-default poscentralized"><div  >Adicionar horário</div></a>

<a href="/horario/novo/hora" class="btn btn-default poscentralized"><div  >definir faixa de horas</div></a>
</div>

<div class="poscentralized">
<section>
    <table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Horário</div></th>
        </tr>
        @foreach($horas as $hr)
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/hora/{{$hr -> id}}">Editar</a></li>
      <li><a href="/horario/remover/hora/{{$hr -> id}}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                  <h6>Apartir das</h6>
                <h5>{{$hr ->horainicio}}</h5>
                  <h6>até às</h6>
                  <h5>{{$hr ->horafim}}</h5>
              </div>

            </div>
          </div>
        </td>
        
        </tr>
        @endforeach

</table>
<table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Segunda</div></th>
        </tr>
        @foreach($horarios as $h)
        @if($h->dia =="Segunda")
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/{{$h->IdHorario}}">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h ->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
                  
              </div>

            </div>
          </div>
        </td>
        
        </tr>
        @endif
@endforeach
</table>

<table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Terça</div></th>
        </tr>
        @foreach($horarios as $h)
        @if($h->dia =="Terça")
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/{{$h->IdHorario}}">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle" align="center">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h ->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
              </div>

            </div>
          </div>
        </td>
        
        </tr>
@endif
@endforeach
</table>

<table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Quarta</div></th>
        </tr>
        @foreach($horarios as $h)
        @if($h->dia =="Quarta")
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/{{$h->IdHorario}}">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h ->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
              </div>

            </div>
          </div>
        </td>
        
        </tr>
@endif
@endforeach
</table>

<table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Quinta</div></th>
        </tr>
        @foreach($horarios as $h)
        @if($h->dia =="Quinta")
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/{{$h->IdHorario}}">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h ->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
              </div>

            </div>
          </div>
        </td>
        
        </tr>
@endif
@endforeach
</table>


<table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Sexta</div></th>
        </tr>
        @foreach($horarios as $h)
        @if($h->dia =="Sexta")
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/{{$h->IdHorario}}">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h ->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
              </div>

            </div>
          </div>
        </td>
        
        </tr>
@endif
@endforeach
</table>


<table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Sábado</div></th>
        </tr>
        @foreach($horarios as $h)
        @if($h->dia =="Sábado")
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/{{$h->IdHorario}}">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h ->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
              </div>

            </div>
          </div>
        </td>
        
        </tr>
@endif
@endforeach
</table>

<table class="TableColumns">
        <tr>
        <th><div class="poscentralized bordered">Domingo</div></th>
        </tr>
        @foreach($horarios as $h)
        @if($h->dia =="Domingo")
        <tr>
          <td>
          <div class="poscentralized">
            <div class="Boxconteudo bordered">
              <div class="dropdown">
    <i class="glyphicon glyphicon-option-vertical dropdown-toggle pull-right" data-toggle="dropdown">
    </i>
    <ul class="dropdown-menu">
      <li><a href="/horario/editar/{{$h->IdHorario}}">Editar</a></li>
      <li><a href="/horario/remover/{{ $h->IdHorario }}">Remover</a></li>
      
    </ul>
  </div>
              <div class="boxtitle">
                <h5>{{$h ->Titulo}}</h5>
                <h5>{{$h ->Professor}}</h5>
                <h6>{{$h ->Sala}}</h6>
              </div>

            </div>
          </div>
        </td>
        
        </tr>
        @endif
@endforeach
</table>

</section>
</div>
      @stop
