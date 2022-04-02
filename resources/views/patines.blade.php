@extends('plantilla')
@section('content')

<div class="container">
      <div class="d-flex justify-content-center">
          <div class="row">
              <div class=".col-md-6 .col-lg-4 .col-sm-12 d-flex justify-content-center">
              <h1>Tipos de patines</h1>
              </div>
              <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex justify-content-left">
                  <h2>Patines en linea</h2>
                </div>
                  <div class="card" style="width: 20rem;margin-top: 1cm;">
                      <img src= "./Img/patines-en-linea.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Patines en linea de bota dura</h5>
                        <p class="card-text">Estos patines son un punto medio entre robustez y ligereza, por lo cual son los idoneos para comenzar</p>
                      </div>
                    </div>
              </div>
              <div class="col col-lg-4 col-md-6 col-sm-12">
              <div class="card" style="width: 20rem; margin-top: 1cm;">
                  <img src= "./Img/Linea fitness.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Patines fitness</h5>
                    <p class="card-text">Los patines fitness son los mas ligeros del condado, ideales para patinadores intermedios con fines casuales o de solo diversion</p>
                  </div>
              </div>
              </div>

              <div class="col col-lg-4 col-md-6 col-sm-12">
              <div class="card" style="width: 20rem; margin-top: 1cm;">
                  <img src= "./Img/Linea Agresivos.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Patines Agresivos</h5>
                    <p class="card-text">Estos patines son para los mas experimentados ya que aseguran muy bien el tobillo
                      y son perfectos para trucos o acrobacias. Ademas de su elevado costo los hace poco accesibles
                    </p>
                  </div>
                </div>
              </div>

              <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex justify-content-left">
                  <br>
                  <h2>Patines quads</h2>
                </div>
                <div class="card" style="width: 20rem;margin-top: 1cm;">
                    <img src= "./Img/Indoors.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Patines quads para interiores</h5>
                      <p class="card-text">Estos patines son perfectos para comenzar en el mundo de los quads,
                        ya que son para interiores, asi que no sufriras de verguenza mientras aprendes!
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col col-lg-4 col-md-6 col-sm-12">
            <div class="card" style="width: 20rem; margin-top: 1cm;">
                <img src= "./Img/Velocidad.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Patines de Velocidad</h5>
                  <p class="card-text">Patines perfectos para aquellos amantes de la velocidad y la adrenalina
                    perfecto para patinadores intermedios
                  </p>
                </div>
            </div>
            </div>

            <div class="col col-lg-4 col-md-6 col-sm-12">
            <div class="card" style="width: 20rem; margin-top: 1cm;">
                <img src= "./Img/Outdoors.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Patines para exteriores</h5>
                  <p class="card-text">Patines ideales para exteriores gracias a la dureza de su bota y sus ruedas,
                    perfectas para acrobacias en exteriores
                  </p>
                </div>
              </div>
            </div>

          </div>
      </div>
    </div>

    @endsection