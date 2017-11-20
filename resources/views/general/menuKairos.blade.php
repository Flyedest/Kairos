@extends('Layout.principal') @section('content')
<!-- <div class="poscentralized">
</div>
 --><div class="container-fluid option-container">
    <a href="/horario">
        <div class="option" id="horario">
            <div class="icone">
            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
            </div>
            <h2>Horario</h2>
            <p>Crie ou edite sua própria tabela de horários escolares.</p>
        </div>
    </a>
    <a href="/agenda">
        <div class="option" id="agenda">
            
            @if(!empty($NotasAgenda))

            <label class="label label-danger notelabel"><big><big>{{count($NotasAgenda)}}</big></big></label>
            @endif
            <label class="label label-danger notelabel"><big><big>{{count($NotasAgenda)}}</big></big></label>
            <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
            <h2>Agenda</h2>
            <p>Organize seus eventos e lembretes na agenda.</p>
            @if(!empty($NotasAgenda))
                @if(count($NotasAgenda)>1)
            <p>Há {{count($NotasAgenda)}} eventos próximos</p>
                @else
            <p>Há {{count($NotasAgenda)}} evento próximo</p>
                @endif
            @endif
        </div>    
    </a>
</div>
<!--
<div class="poscentralized">
    <div class="alert alert-success">
    <p>Sua Aulas de hoje são..</p>
    </div>
    <div class="alert alert-info">
    <p>Você tem um evento próximo </p>
    </div>
</div>
-->
@endsection @section('title') Menu @stop
