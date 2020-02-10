@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/quienes-somos.css') }}">
<title>¿Quienes somos?</title>
@section('content')

<div class="flex-center">
    <h1>¿Quienes somos?</h1>
</div>

<div class="flex-center">
    <img class="img-us" id="png" src= "{{ asset('img/us/pango.jpg') }}"> 
    <img class="img-us" id="rich" src= "{{ asset('img/us/ricardo.jpg') }}">
    <img class="img-us" id="wend" src= "{{ asset('img/us/wendy.jpg') }}">
</div>
<div class="flex-center">
    <h3>Rafael Bolaños</h3>
    <h3>Ricardo González</h3> 
    <h3>Wendy González</h3> 
</div>

<div class="flex-center">
    <p> Este proyecto sirve para el aprendizaje de las herramientas con las que cuenta laravel, un de las principles y mas utilizada como es el sistema de loggeo, así como el registro de estos mismos, junto con las migraciones de datos que integra el sistema; y los seeds las cual es información que se encuentra disponible para ser compatida a traves de la red, hacindola una herramientas importantey fundamental para la creación del proyecto. </p>
</div>


@endsection