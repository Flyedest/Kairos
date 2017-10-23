@extends('Layout.principal')

@section('title')
Definir hora

@endsection

@section('content')
<br/>
<br/>
<div class="poscentralized">

    <form action="/horario/add/hora" method="post">
        
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
        
  <div class="form-group">
      <label for="horainicio">Horario de inicio</label>
      <input  id="horainicio" name="horainicio" type="time" class="form-control" >
  </div>
        <div class="form-group">
      <label for="horaFim">Horario de término</label>
      <input  id="horafim" name="horafim" type="time" class="form-control">
            
  </div>
        <input type="submit"/>
    </form>
</div>