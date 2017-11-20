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
<div class="panel panel-default div-panel" align="center">
  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis varius sem ac porta. In feugiat elit faucibus erat tristique ornare. Nulla facilisi. Nunc porta orci et justo sollicitudin, ut semper odio laoreet. Suspendisse vel hendrerit arcu, quis congue justo. Cras tincidunt non nulla sed dignissim. In pretium sapien in purus interdum hendrerit. Vestibulum ultricies nibh erat, eget tempus odio commodo vitae. Nam semper fringilla turpis in egestas. Phasellus dapibus ipsum neque.</div>
</div>


@endsection
    @section('Back')
    <a href="/menu">Menu</a>
    @endsection
@section('title')
Bem vindo!
    
@stop
