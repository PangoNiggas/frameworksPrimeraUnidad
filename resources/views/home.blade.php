@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::user()->name == "comprador")
                    <!-- Page Content -->
                    <div class="container">

                        <!-- Page Heading -->
                        <h1 class="my-4">PNG's MARKET LIST
                        <small>one click to go</small>
                        </h1>
                
                        <!-- Project One -->
                        <div class="row">
                        <div class="col-md-7">
                            <a href="#">
                            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/items/ps1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-5">
                            <h3>Consola De Videojuegos Sony Playstation Ps One</h3>
                            <p>consola sony psone ps1 scph10194015.</p>
                            <br>
                            <p>$16,245.39</p>
                            <a class="btn btn-primary" href="#">Comprar</a>
                        </div>
                        </div>
                        <!-- /.row -->
                
                        <hr>
                
                        <!-- Project Two -->
                        <div class="row">
                        <div class="col-md-7">
                            <a href="#">
                            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/items/xbox360.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-5">
                            <h3>Xbox 360 Slim</h3>
                            <p>CONSOLA XBOX MODELO SLIM 4GB DE USO.</p>
                            <br>
                            <p>$1,950</p>
                            <a class="btn btn-primary" href="#">Comprar</a>
                        </div>
                        </div>
                        <!-- /.row -->
                
                        <hr>
                
                        <!-- Project Three -->
                        <div class="row">
                            <div class="col-md-7">
                                <a href="#">
                                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/items/ps4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3>Sony PlayStation 4 Slim 1TB</h3>
                                <p>Gracias a su interconectividad global, descargarás los mejores videojuegos y navegarás en la web sin límites. A su vez, la posibilidad de competir en línea con otros te hará disfrutar de aventuras inolvidables junto a amigos y personas de todas partes del mundo.</p>
                                <br>
                                <p>$9,599</p>
                                <a class="btn btn-primary" href="#">Comprar</a>
                            </div>
                        </div>
                        <!-- /.row -->
                
                        <hr>
                
                        <!-- Project Four -->
                        <div class="row">
                            <div class="col-md-7">
                                <a href="#">
                                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/items/nintendos.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3>Nintendo Switch 32GB</h3>
                                <p>Nintendo Switch es una consola desmontable, que puede usarse en modo portátil, sobremesa o en TV; esto te brindará la posibilidad de utilizarla donde quieras y compartir sus controles. Además, los Joy-con cuentan con botones especiales para realizar print de pantalla y una cámara infrarroja que puede leer la distancia respecto a los objetos e incluso detectar formas.</p>
                                <br>
                                <p>$7,376.99</p>
                                <a class="btn btn-primary" href="#">Comprar</a>
                            </div>
                        </div>
                        <!-- /.row -->
                       
                    </div>
                    <!-- /.container -->

                @else
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
