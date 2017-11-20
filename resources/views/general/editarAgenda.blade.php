@extends('Layout.principal')
@section('Back')
    <a href="/agenda">Voltar</a>
    @endsection
@section('title')
Agenda
@endsection
@section('content')

    <div class="poscentralized">

    <form action="/agenda/atualizar" method="post">
      
        <input type="hidden" value="{{$id}}" name="id"/>
    <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
        
  <div class="form-group">
    <label for="Titulo">Título</label>

    <input  id="Titulo" name="Titulo"  class="form-control" placeholder="Titulo">
  </div>
        <div class="form-group">
    <label for="Descricao">Descrição</label>

    <input  id="Descricao" name="Descricao" class="form-control" placeholder="Descrição">
  </div>
        
        <div class="form-group">
    <label for="DataInicio">Data de inicio do evento</label>

    <input  id="DataInicio" name="DataInicio" type="date" class="form-control" placeholder="Data de inicio">
  </div>
        
        <div class="form-group">
    <label for="DataFim">Data de término do evento</label>

    <input  id="DataFim" name="DataFim" type="date" class="form-control" placeholder="DataFim">
  </div>
            <br/>
            <input  class="btn btn-success btn-block"type="submit" value="Editar"/>
  
    </form>
</div>

@stop