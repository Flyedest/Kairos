@extends('Layout.principal')

@section('title')
Novo Horário

@endsection

@section('conteudo')
<br/>
<br/>
<div class="poscentralized">

    <form action="/horario/add" method="post">
        
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
  <div class="form-group">
    <label for="titulo">Titulo</label>

    <input  id="titulo" name="Titulo" type="text" class="form-control" placeholder="Titulo">
  </div>
        <div class="form-group">
    <label for="professor">Professor</label>

    <input  id="professor" name="Professor" type="text" class="form-control" placeholder="Professor">
  </div>
        <div class="form-group">
    <label for="sala">Sala</label>

    <input  id="sala" type="text" name="Sala" class="form-control" placeholder="Sala">
  </div>
        <div class="form-group">
    <label for="dia">Dia</label>
    <select class="form-control" name="Dia" id="dia">
      <option>Segunda</option>
      <option>Terça</option>
      <option>Quarta</option>
      <option>Quinta</option>
      <option>Sexta</option>
      <option>Sábado</option>
      <option>Domingo</option>
    </select>
  </div>
        <div class="form-group">
    <label for="hora">Hora</label>

    <input  id="hora" type="time" class="form-control" placeholder="Horario" name="Hora">
  </div>
        <input type="submit"/>
        
        
</form>
</div>
@stop