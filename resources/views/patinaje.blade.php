@extends('plantilla')
@section('content')

<div class="container">
      <div class="d-flex justify-content-center">
          <div class="row">
              <div class=".col-md-6 .col-lg-4 .col-sm-12 d-flex justify-content-center">
              <h1>Tipos de patinaje</h1>
              </div>
              <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex justify-content-left">
                  <h2></h2>
                </div>
                  <div class="card" style="width: 20rem;margin-top: 1cm;">
                      <img src= "./Img/Freestyle.webp" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Patinaje Freestyle</h5>
                        <p class="card-text">Este tipo de patinaje se caracteriza por la velocidad para evadir conos, ademas de la habilidad en el suelo con los patines</p>
                      </div>
                    </div>
              </div>
              <div class="col col-lg-4 col-md-6 col-sm-12">
              <div class="card" style="width: 20rem; margin-top: 1cm;">
                  <img src= "./Img/Agresivo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Patinaje Agresivo</h5>
                    <p class="card-text">Patinaje hecho solo para los mas valientes del condado. Este patinaje se caracteriza por sus acrobacias por los aires o sobre rieles etc</p>
                  </div>
              </div>
              </div>

              <div class="col col-lg-4 col-md-6 col-sm-12">
              <div class="card" style="width: 20rem; margin-top: 1cm;">
                  <img src= "./Img/Artistico.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Patinaje Artistico</h5>
                    <p class="card-text">Este patinaje es el mas sutil de todos, caracterizado por sus poses artisticas y esteticas</p>
                  </div>
                </div>
              </div>

              <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex justify-content-left">
                  <br>
                </div>
                <div class="card" style="width: 20rem;margin-top: 1cm;">
                    <img src= "./Img/Fitness.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Patinaje fitness</h5>
                      <p class="card-text">Este patinaje es idoneo para aquellos que busquen una actividad al aire libre sin ninguna implicacion competitiva
                          ya que este solo consta de patinar!
                      </p>
                    </div>
                  </div>
            </div>
            </div>

          </div>
      </div>
    </div>

@endsection