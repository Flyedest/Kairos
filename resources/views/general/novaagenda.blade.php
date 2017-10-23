@extends('Layout.principal')

@section('content')

<div class="poscentralized">
    <div class="forma" style="position:absolute; margin-top:20%;">
<form action="/agenda/add" method="post">
        
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
  <div class="form-group">
    <label for="titulo">Titulo</label>

    <input  id="titulo" name="Titulo" type="text" class="form-control" placeholder="Titulo">
  </div>
    
        <div class="form-group">
    <label for="Descricao">Descrição</label>

    <input  id="Descricao" name="Descricao" type="text" class="form-control" placeholder="Descricao">
  </div>
    
        <div class="form-group">
    <label for="DataInicio">Data de Inicio do evento</label>

    <input  id="DataInicio" type="date" name="DataInicio" class="form-control" placeholder="DataInicio">
  </div>
    
       <div class="form-group">
    <label for="DataFim">Data de término do evento</label>

    <input  id="DataFim" type="date" name="DataFim" class="form-control" placeholder="DataFim">
  </div>
        <input type="submit"/>
        
        
</form>
        </div>
</div>