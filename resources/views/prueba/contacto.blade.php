@extends('layouts.plantillabase');
@section('contenido')
<br><br>
<div class="card">
    <div class="card-body">
    <div class="col-lg-12"  >
<div class="row">
  <div class="col-sm-4">
  <div class="card" style="width: 18rem;">
  <img src='{{url("/img/4.jpg")}}'  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Yanira Benavides</h5>
    <p class="card-text">Ingeniera de Sistemas</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">universidad de Nariño</li>
    <li class="list-group-item">Pasto-Nariño</li>
    <li class="list-group-item">3023553984</li>
  </ul>
  <div class="card-body">
    <a href="https://web.whatsapp.com/" class="card-link">Whatssapp</a>
    <a href="https://www.facebook.com/BenavidesYani/" class="card-link">Facebook</a>
  </div>
</div>
  </div>
  <div class="col-sm-4">
  <div class="card" style="width: 18rem;">
  <img src='{{url("/img/5.jpg")}}'class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Datos personales </h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">celular:3023553984</li>
    <li class="list-group-item">email: yanibenavides@yahoo.com</li>
    <li class="list-group-item">direccion: Pasto</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
  </div>
  <div class="col-sm-4">
  <div class="card" style="width: 18rem;">
  <img  src='{{url("/img/6.jpg")}}'class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" href="https://web.whatsapp.com/">Redes Sociales </h5>
    <p class="card-text">Sigueme en mis redes sosciales </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" href="https://web.whatsapp.com/"><a href="https://www.facebook.com/BenavidesYani/" class="card-link">Facebook</a></li>
    <li class="list-group-item"><i class="fa fa-instagram" aria-hidden="true">instagram</i></li>
    <li class="list-group-item"><i class="fa fa-twitter" aria-hidden="true"></i>twitter</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
  </div>
</div>
</div>

</div>
  </div>
</div>
@stop