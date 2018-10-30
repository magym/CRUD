@extends('clientes.app')

@section('content')

<hr>

<div class="container">

	<div class="row">
		<div class="container text-justify">
			
				<div>
				<h5 class="panel-title text-center">Inicio de sesión</h5>
				</div>
				<br>

				<div class="container col-3">
					<form method="POST" action="{{ route('login')}}">

						{{ csrf_field() }}

						

						<div class="form-group">

							<label for="email">Ususario:</label>
							<input class="form-control" type="email" name="email" value="{{ old('email')}}" placeholder="Enter username">

						

							{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
							
						</div>
						<div class="form-group">

							<label for="password">Contraseña:</label>
							<input class="form-control" type="password" name="password" placeholder="Enter password">

							{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
							
						</div>


						<button class="btn btn-light btn-block">Entrar</button>
					</form>
				</div>
					
				
			
		</div>
		
	</div>

</div>


@endsection