@extends('Layout.principal')

@section('title')
Definir hora

@endsection

@section('content')
<br/>
<br/>
<div class="poscentralized"  >
    
    <div class="panel panel-default">
    
    <div class="panel-heading">
        Adicionar hora
        </div>
    
    <div class="panel-body">
        
    <form action="/horario/add/hora" class="form-group"  method="post">
        
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
        
  <div class="form-group">
    <label class="" for="exampleInputEmail2">Horario de Inicio</label>
    <input type="time" class="form-control" name="horainicio" id="exampleInputEmail2" >
  </div>
  <div class="form-group">
    <label class="" for="exampleInputPassword2">Horário de término</label>
    <input type="time" class="form-control" name="horafim" id="exampleInputPassword2" >
  </div>
            

        <input  class="btn btn-success" type="submit"/>
    </form>
</div>
</div>




@stop