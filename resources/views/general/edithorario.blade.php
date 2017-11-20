@extends('Layout.principal')

@section('title')
Editar

@endsection

@section('content')
<br/>
<br/>
<div class="poscentralized">

    <form action="/horario/atualizar" method="post">
      
        <input type="hidden" value="{{$editar}}" name="IdHorario"/>
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
            <br/>
            <input  class="btn btn-success btn-block"type="submit" value="Editar"/>
  </div>
    </form>
</div>
@stop