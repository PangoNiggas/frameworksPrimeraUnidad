@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
<title>Contacto</title>
@section('content')

<div class="flex-center">


</div>

<div class="flex-center">
    <img class="img-us" id="png" src= "{{ asset('img/us/pango.jpg') }}"> 
    <div class="datos">
        <h3>Rafael Bolaños</h3>
        <p>Correo: animasdelmundo2@gmail.com<br>
        Telefono: 961XXX19784XX<br>
        FB: Pango<br>
    </p>
    </div>
</div>

<div class="flex-center">
    <div class="datos">
        <h3>Ricardo González</h3> 
        <p>Correo: 0.ricardogonzalez.0@gmail.com<br>
            Telefono: 961XXX19784XX<br>
            FB: Ricardo<br>
        </p>
    </div>
    <img class="img-us" id="rich" src= "{{ asset('img/us/ricardo.jpg') }}"> 
</div>

<div class="flex-center">
    <img class="img-us" id="wend" src= "{{ asset('img/us/wendy.jpg') }}">
    <div class="datos">
        <h3>Wendy González</h3> 
        <p>Correo: wendyG@gmail.com<br>
            Telefono: 961XXX19784XX<br>
            FB: Wnedy<br>
        </p>
    </div>
</div>
@endsection