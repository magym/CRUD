@extends('clientes.app')

@section('content')

<hr>

<div class="container">

  <div class="card text-center">
  <div class="card-header">
  Características 
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $cliente->nombre}}</h5>
    <p class="card-text">{{ $cliente->rfc}}</p>
    <p class="card-text">{{ $cliente->telefono}}</p>
    <p class="card-text">{{ $cliente->email}}</p>
    <p class="card-text">Observaciones:</p>
    <p class="card-text">{{ $cliente->observaciones}}</p>
    <br>
    <a href="{{route('clientes',$cliente->id)}} " class="btn btn-light">Atras</a>
  </div>
  <div class="card-footer text-muted">
    {{$cliente->created_at}}
  </div>
</div>

</div>

    

@endsection