@extends('Layout.principal')
@section('Back')
    <a href="/menu">Voltar</a>
    @endsection
@section('content')

<div class="poscentralized">

    <form action="/horario/atualizar/hora" method="post">
      
        <input type="hidden" value="{{$id}}" name="id"/>
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar hora
            </div>
            <div class="panel-body">        
  <div class="form-group">
    <label for="horainicio">Começa às</label>

    <input  id="horainicio" name="horain" type="time" class="form-control" placeholder="" required>
  </div>
        <div class="form-group">
    <label for="horafim">Termina às</label>

    <input  id="horafim" name="horafim" type="time" class="form-control" placeholder="" required>
  </div>
            <br/>
            <input  class="btn btn-success btn-block"type="submit" value="Editar"/>
  
            </div>
        </div>
    </form>
    
</div>

@stop