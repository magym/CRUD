@extends('clientes.app')

@section('content')

<br>
<div class="container ">
	<div class="nav justify-content-end">
				<form method="POST" action="{{ route('logout') }}">
					{{ csrf_field() }}

					<button class="btn btn-light">Salir</button>					
				</form>				
				
			</div>
</div>

			<hr>

	<div class="container text-center">

		<div class="card">
			<div class="card-body">
				<div>
				<h5 class="card-title">Bienvenido {{ auth()->user()->name }}</h5>
				</div>

				<div class="card-text">
				<strong>Email:</strong>
				{{auth()->user()->email }}
				
			</div>

		</div>
	</div>

			<br>

			<div>
			<form method="GET" action="{{ route('clientes') }}">
				{{ csrf_field() }}
				<button class="btn btn-light btn-lg btn-block">Entrar a lista de clientes</button>
				
			</form>
			</div>

			


</div>


@endsection
