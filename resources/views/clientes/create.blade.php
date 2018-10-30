@extends('clientes.app')

@section('content')

<hr>

<h1 class="text-center">Agregar Clientes</h1>
<hr>

<div class="container">

  <form action="{{ route('clientes.store')}}" method="POST">
    @csrf

  <div class="row">

    <div class="col-md-6 mb-3">
      <label for="validationServer01">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="validationServer01" placeholder="Nombre del cliente" required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationServerUsername">RFC</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3"></span>
        </div>
        <input type="text" name="rfc" class="form-control" id="validation" placeholder="RFC" aria-describedby="inputGroupPrepend3" required>
        
        <div class="invalid-feedback">         
        </div>
      </div>
    </div>      

    <div class="col-md-3 mb-2">
      <label for="validationServerUsername">Teléfono</label>
      <input type="text" name="telefono" class="form-control" id="validationServer01" placeholder="" required>
      </div>  
    </div>



  <div class="row">
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3"></span>
        </div>
        <input type="text" name="email" class="form-control" id="validationServerUsername" placeholder="@email" aria-describedby="inputGroupPrepend3" required>
      </div>
    </div>
    <div class="col-md-8 mb-3">
      <label for="validationServerUsername">Observaciones</label>
      <input type="text" name="observaciones" class="form-control" id="validationServer01" placeholder="" required>
      </div>  
    </div>
 
  
  <button type="submit" class="btn btn-light">Enviar</button>
</form>
  

</div>

@endsection