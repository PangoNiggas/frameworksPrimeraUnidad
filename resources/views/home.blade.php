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
                                <th>Id Venta</th>
                                <th>Comprador</th>
                                <th>Cantidad</th>
                                <th>Producto</th>
                                <th>Precio</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>01</td>
                                <td>Maria</td>
                                <td>1</td>
                                <td>Xbox 360 Slim</td>
                                <td>$1,950</td>
                              </tr>
                               <tr>
                                <td>02</td>
                                <td>Jose</td>
                                <td>1</td>
                                <td>Sony PlayStation 4 Slim 1TB</td>
                                <td>$9,599</td>
                              </tr>
                                <tr>
                                <td>03</td>
                                <td>Sebastian</td>
                                <td>3</td>
                                <td>Nintendo Switch 32GB</td>
                                <td>$7,376.99</td>
                              </tr>
                              <tr>
                                <td>04</td>
                                <td>Sofia</td>
                                <td>2</td>
                                <td>Sony PlayStation 4 Slim 1TB</td>
                                <td>$9,599</td>
                              </tr>
                              <tr>
                                <td>05</td>
                                <td>Ricardo</td>
                                <td>3</td>
                                <td>Xbox 360 Slim</td>
                                <td>$1,950</td>
                              </tr>
                              <tr>
                                <td>06</td>
                                <td>Ramiro</td>
                                <td>2</td>
                                <td>Sony PlayStation 4 Slim 1TB</td>
                                <td>$9,599</td>
                              </tr>
                              <tr>
                                <td>07</td>
                                <td>Guillermo</td>
                                <td>1</td>
                                <td>Videojuegos Sony Playstation Ps One</td>
                                <td>$16,245.39</td>
                              </tr>
                              <tr>
                                <td>08</td>
                                <td>Eduardo</td>
                                <td>2</td>
                                <td>Nintendo Switch 32GB</td>
                                <td>$7,376.99</td>
                              </tr>
                              <tr>
                                <td>09</td>
                                <td>Alejandro</td>
                                <td>4</td>
                                <td>Nintendo Switch 32GB</td>
                                <td>$7,376.99</td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>Carmen</td>
                                <td>3</td>
                                <td>Sony PlayStation 4 Slim 1TB</td>
                                <td>$9,599</td>
                              </tr>
                              <tr>
                                <td>11</td>
                                <td>Joe</td>
                                <td>1</td>
                                <td>Videojuegos Sony Playstation Ps One</td>
                                <td>$16,245.39</td>
                              </tr>
                              <tr>
                                <td>12</td>
                                <td>Ana</td>
                                <td>4</td>
                                <td>Nintendo Switch 32GB</td>
                                <td>$7,376.99</td>
                              </tr>
                              <tr>
                                <td>13</td>
                                <td>Emily</td>
                                <td>1</td>
                                <td>Xbox 360 Slim</td>
                                <td>$1,950</td>
                              </tr>
                              <tr>
                                <td>14</td>
                                <td>Jack</td>
                                <td>2</td>
                                <td>Sony PlayStation 4 Slim 1TB</td>
                                <td>$9,599</td>
                              </tr>
                              <tr>
                                <td>15</td>
                                <td>Joy</td>
                                <td>2</td>
                                <td>Videojuegos Sony Playstation Ps One</td>
                                <td>$16,245.39</td>
                              </tr>
                              <tr>
                                <td>16</td>
                                <td>Marcus</td>
                                <td>1</td>
                                <td>Xbox 360 Slim</td>
                                <td>$1,950</td>
                              </tr>
                              <tr>
                                <td>17</td>
                                <td>Joseph</td>
                                <td>1</td>
                                <td>Nintendo Switch 32GB</td>
                                <td>$7,376.99</td>
                              </tr>
                              <tr>
                                <td>18</td>
                                <td>Andre</td>
                                <td>5</td>
                                <td>Nintendo Switch 32GB</td>
                                <td>$7,376.99</td>
                              </tr>
                              <tr>
                                <td>19</td>
                                <td>Daniel</td>
                                <td>2</td>
                                <td>Sony PlayStation 4 Slim 1TB</td>
                                <td>$9,599</td>
                              </tr>
                              <tr>
                                <td>20</td>
                                <td>Vanessa</td>
                                <td>5</td>
                                <td>Xbox 360 Slim</td>
                                <td>$1,950</td>
                              </tr>
                              <tr>
                                <td>21</td>
                                <td>Austin</td>
                                <td>1</td>
                                <td>Videojuegos Sony Playstation Ps One</td>
                                <td>$16,245.39</td>
                              </tr>
                              <tr>
                                <td>22</td>
                                <td>Yuko</td>
                                <td>2</td>
                                <td>Nintendo Switch 32GB</td>
                                <td>$7,376.99</td>
                              </tr>
                              <tr>
                                <td>23</td>
                                <td>Isabella</td>
                                <td>2</td>
                                <td>Sony PlayStation 4 Slim 1TB</td>
                                <td>$9,599</td>
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
