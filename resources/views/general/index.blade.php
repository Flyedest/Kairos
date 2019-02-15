@extends('Layout.principal')
@section ('body')
	background
@endsection
@section('content')

<div class="div-menu">
	<div class="title" align="center" style="font-size:48pt;">Tenha controle sobre o seu tempo</div>
	<a class="a-default" href="/register">
		<div class="poscentralized">
			<input class="btn btn-default btn-register" value="Registre-se já!"/>
		</div>
	</a>
</div>

@endsection
    @section('Back')
    <a href="/menu">Menu</a>
    @endsection
@section('title')
Bem vindo!
    
@stop
