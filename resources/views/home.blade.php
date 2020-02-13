@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

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

                <div class="container-fluid">
                    
              
                        <h1 class="sub-header">Dashboard</h1>
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Header</th>
                                <th>Header</th>
                                <th>Header</th>
                                <th>Header</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1,001</td>
                                <td>Lorem</td>
                                <td>ipsum</td>
                                <td>dolor</td>
                                <td>sit</td>
                              </tr>
                              <tr>
                                <td>1,002</td>
                                <td>amet</td>
                                <td>consectetur</td>
                                <td>adipiscing</td>
                                <td>elit</td>
                              </tr>
                              <tr>
                                <td>1,003</td>
                                <td>Integer</td>
                                <td>nec</td>
                                <td>odio</td>
                                <td>Praesent</td>
                              </tr>
                              <tr>
                                <td>1,003</td>
                                <td>libero</td>
                                <td>Sed</td>
                                <td>cursus</td>
                                <td>ante</td>
                              </tr>
                              <tr>
                                <td>1,004</td>
                                <td>dapibus</td>
                                <td>diam</td>
                                <td>Sed</td>
                                <td>nisi</td>
                              </tr>
                              <tr>
                                <td>1,005</td>
                                <td>Nulla</td>
                                <td>quis</td>
                                <td>sem</td>
                                <td>at</td>
                              </tr>
                              <tr>
                                <td>1,006</td>
                                <td>nibh</td>
                                <td>elementum</td>
                                <td>imperdiet</td>
                                <td>Duis</td>
                              </tr>
                              <tr>
                                <td>1,007</td>
                                <td>sagittis</td>
                                <td>ipsum</td>
                                <td>Praesent</td>
                                <td>mauris</td>
                              </tr>
                              <tr>
                                <td>1,008</td>
                                <td>Fusce</td>
                                <td>nec</td>
                                <td>tellus</td>
                                <td>sed</td>
                              </tr>
                              <tr>
                                <td>1,009</td>
                                <td>augue</td>
                                <td>semper</td>
                                <td>porta</td>
                                <td>Mauris</td>
                              </tr>
                              <tr>
                                <td>1,010</td>
                                <td>massa</td>
                                <td>Vestibulum</td>
                                <td>lacinia</td>
                                <td>arcu</td>
                              </tr>
                              <tr>
                                <td>1,011</td>
                                <td>eget</td>
                                <td>nulla</td>
                                <td>Class</td>
                                <td>aptent</td>
                              </tr>
                              <tr>
                                <td>1,012</td>
                                <td>taciti</td>
                                <td>sociosqu</td>
                                <td>ad</td>
                                <td>litora</td>
                              </tr>
                              <tr>
                                <td>1,013</td>
                                <td>torquent</td>
                                <td>per</td>
                                <td>conubia</td>
                                <td>nostra</td>
                              </tr>
                              <tr>
                                <td>1,014</td>
                                <td>per</td>
                                <td>inceptos</td>
                                <td>himenaeos</td>
                                <td>Curabitur</td>
                              </tr>
                              <tr>
                                <td>1,015</td>
                                <td>sodales</td>
                                <td>ligula</td>
                                <td>in</td>
                                <td>libero</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                <!---
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div> -->
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
