@extends('Layout.principal')
@section('Back')
    <a href="/menu">Voltar</a>
    @endsection
@section('content')

<div class="poscentralized">

    <form action="/horario/atualizar/hora" method="post">
      
        <input type="hidden" value="{{$id}}" name="id"/>
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
        
  <div class="form-group">
    <label for="horainicio">Começa às</label>

    <input  id="horainicio" name="horain" type="time" class="form-control" placeholder="">
  </div>
        <div class="form-group">
    <label for="horafim">Termina às</label>

    <input  id="horafim" name="horafim" type="time" class="form-control" placeholder="">
  </div>
            <br/>
            <input  class="btn btn-success btn-block"type="submit" value="Editar"/>
  
    </form>
</div>

@stop