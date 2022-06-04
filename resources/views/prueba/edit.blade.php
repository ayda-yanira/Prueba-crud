@extends('layouts.plantillabase');
@section('contenido')

<div class="card" style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">
  <div style="color:#0f0c64" class="card-body" style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">
  <h2 style="text-align: center" >EDITAR REGISTROS</h2>
  </div>
</div>
<div class="card " style="border:rgb(10, 41, 88)">
  <div class="card-body " style="background-color:rgb(252, 251, 255)">

<form action="/prueba/{{$prueba->id}}" method="POST">
    @csrf    
    @method('PUT')
  
  <div class="mb-3">
    <label for="" class="form-label"style="color:#0f0c64">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$prueba->nombre}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label"style="color:#0f0c64">Apellido</label>
    <input id="apellido" name="apellido" type="date" class="form-control" value="{{$prueba->apellido}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label"style="color:#0f0c64">Cargo</label>
    <input id="cargo" name="cargo" type="text" class="form-control" value="{{$prueba->cargo}}">
  </div>

  
  <div class="mb-3">
    <label for="" class="form-label"style="color:#0f0c64">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$prueba->direccion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label"style="color:#0f0c64">Telefono</label>
    <input id="telefono" name="telefono"maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text" class="form-control" value="{{$prueba->telefono}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label"style="color:#0f0c64">Correo</label>
    <input id="correo" name="correo" type="email" class="form-control" value="{{$prueba->correo}}">
  </div>
  


  <div class="mb-3"style="color:#0f0c64">
    <label for="" class="form-label"style="color:#0f0c64"><b> Sueldo</b></label>
    <input id="sueldo" name="sueldo" type="number" step="any" class="form-control" value="{{$prueba->sueldo}}">
  </div>

  <a href="/prueba" class="btn btn-secondary"style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">Cancelar</a>
  <button type="submit" class="btn btn-primary"style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">Guardar</button>
</form>
<div></div>
@stop
