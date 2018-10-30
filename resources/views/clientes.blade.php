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

<h1 class="text-center">Lista de clientes</h1>
<hr>


<div class="container">



    
      @if (Session::has('message'))
      <div class="alert alert-info col-md-4 mb-3">{{Session::get('message')}}</div>
      @endif

  <div>
     <a class="btn btn-light mb-3" href="{{ route('clientes.create')}}"> Agregar Cliente</a>
  </div>




  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">RFC</th>
      <th scope="col">Teléfono</th>
      <th scope="col">E-mail</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($clientes as $cliente)
    <tr>
      <td>{{ $cliente->id }}</td>
      <td><a href="{{ route('clientes.show', $cliente->id)}}">{{ $cliente->nombre }}</a></td>
      <td>{{ $cliente->rfc}}</td>
      <td>{{ $cliente->telefono}}</td>
      <td>{{ $cliente->email}}</td>
      <td>{{ $cliente->observaciones}}</td>
      <td><a class="btn btn-light" href="{{route('clientes.edit', $cliente->id)}}">Editar</a> 

        <form action="{{ route('clientes.destroy', $cliente->id)}}" method="POST">
        
          @csrf
          @method('DELETE')

          <button type="submit" class="btn btn-light mt-3" onclick="return confirm('¿Eliminar cliente?')">Eliminar</button>
        </form>
      </td>   

      
    @endforeach
  </tbody>
</table>

<div>
  {{ $clientes->links() }}
</div>

    
</div>



@endsection