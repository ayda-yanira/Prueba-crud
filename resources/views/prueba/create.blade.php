@extends('layouts.plantillabase');
@section('contenido')

<div class="card" style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">
  <div style="color:#0f0c64" class="card-body" style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">
  <h2 style="text-align: center" >REGISTRO DE PRUEBA</h2>
  </div>
</div>


<div class="card " style="border:rgb(10, 41, 88)">
  <div class="card-body " style="background-color:rgb(252, 251, 255)">
<form action="/" method="POST"style="border:#0f0c64">
    @csrf
    <div class="container">

  <div class="row">
  
  <div class="col-lg-6">
    <label for="" class="form-label"style="color:#0f0c64"> <b> Nombre </b></label>
    <input id="nombre" name="nombre"placeholder="Escribe tu Nombre y Apellido"type="text" class="form-control" tabindex="2" required>
  </div>
  </div>
  
<br>

  <div class="row">
      <div class="col-lg-4" >
        <label for="" class="form-label" style="color:#0f0c64"><b>Apellidos</b></label>
        <input id="apellido" name="apellido" type="date" class="form-control" tabindex="2"required>
      </div>

     <div class="col-lg-4">
      <label for="" class="form-label" style="color:#0f0c64"><b> Telefono</b></label>
      <input id="telefono" name="telefono"maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text" class="form-control" tabindex="2"required>
     </div>
  
  <div class="col-lg-4">
    <label for="" class="form-label" style="color:#0f0c64"><b>Correo </b></label>
     <input id="correo" name="correo" type="email" class="form-control" tabindex="2"required>
  </div>
</div>
<br>
  <div class="row">
     <div class="col-lg-6">
       <label for="" class="form-label"style="color: #0f0c64"><b>Direccion </b></label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2"required>
      </div>
 

      <div class="col-lg-6">
          <label for="" class="form-label"style="color:#0f0c64"> <b> Cargo</b></label>
          <input id="cargo" name="cargo"placeholder=""type="text" class="form-control" tabindex="2" required>
       </div>

     </div>

<br>
 

      <div class="col-lg-6"  style="background-color:rgb(255, 251, 251)">
      <label for="" class="form-label" style="color:#0f0c64"><b>Sueldo </b></label>
    <input id="sueldo" name="sueldo" type="number" step=1.0  class="form-control" tabindex="3">
      </div>

        
    </div>
</div>

  
  <br>
  <br>
  <a href="/"  tabindex="5" class="btn btn-orange"style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">Cancelar</a>
  <button type="submit"  tabindex="4" class="btn btn-orange"style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)">Guardar</button>
</form>
</div></div>
<br>
@endsection