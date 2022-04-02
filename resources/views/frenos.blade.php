@extends('plantilla')
@section('content')

<div class="container">
      <div class="d-flex justify-content-center">
          <div class="row">
              <div class=".col-md-6 .col-lg-4 .col-sm-12 d-flex justify-content-center">
              <h1>Tipos de frenos</h1>
              </div>
              <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex justify-content-left">
                  <h2></h2>
                </div>
                  <div class="card" style="width: 20rem;margin-top: 1cm;">
                      <img src= "./Img/Tipos de freno.jfif" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Freno de taco</h5>
                        <p class="card-text">Este es el freno por excelencia para todos los patinadores principiantes, ya que usas el mismo freno incluido en el patin</p>
                        <a href="https://www.youtube.com/watch?v=tICr5xdGp-E" class="btn btn-primary">Ver tutorial</a>
                      </div>
                    </div>
              </div>
              <div class="col col-lg-4 col-md-6 col-sm-12">
              <div class="card" style="width: 20rem; margin-top: 1cm;">
                  <img src= "./Img/En t.jfif" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Freno en T</h5>
                    <p class="card-text">Freno para patinadores intermedios, ya que aqui le dices adios al freno de taco.
                         Lo que se logra es detenerse con una postura en forma de t usando los rieles del patin trasero como freno
                    </p>
                    <a href="https://www.youtube.com/watch?v=ne1TWV_jNeM" class="btn btn-primary">Ver tutorial</a>
                  </div>
              </div>
              </div>

              <div class="col col-lg-4 col-md-6 col-sm-12">
              <div class="card" style="width: 20rem; margin-top: 1cm;">
                  <img src= "./Img/cuna.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Freno en cuña</h5>
                    <p class="card-text">Continuamos con frenos iniciales, en este aprovechamos la fuerza de las piernas utilizando el peso comenzando en los talones
                        y recorrerlo a la punta de los pies
                    </p>
                    <a href="https://www.youtube.com/watch?v=IevgvyC0TDY" class="btn btn-primary">Ver tutorial</a>
                  </div>
                </div>
              </div>

              <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex justify-content-left">
                  <br>
                </div>
                <div class="card" style="width: 20rem;margin-top: 1cm;">
                    <img src= "./Img/Powerslide.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Freno Powerslide</h5>
                      <p class="card-text">Este es el freno mas estetico pero a la vez mas arriesgado. Elige sabiamente. 
                          Se basa en deslizar un patin por la parte externa aprovechando el riel del patin para frenar, este freno es muy comun en competencias de Freestyle
                      </p>
                      <a href="https://www.youtube.com/watch?v=JmJOm0AhGQk" class="btn btn-primary">Ver tutorial</a>
                    </div>
                  </div>
            </div>
            </div>

          </div>
      </div>
    </div>

@endsection