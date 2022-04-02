@extends('plantilla')
@section('content')

<div class="container">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class=".col-md-6 .col-lg-4 .col-sm-12 d-flex justify-content-center">
                <h1>Welcome to Rollers.Co</h1>
                </div>
                <img src="./Img/Cover.jpg" width="80%" alt="">
                <div class="col col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 20rem;margin-top: 1cm;">
                        <img src= "./Img/Tipos de patines.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Tipos de patines</h5>
                          <p class="card-text">En el mundo del patinaje existen miles de patines distintos.<br> ¿Con cuales empiezo?</p>
                          <a href="{{route('patines')}}" class="btn btn-primary">Ver</a>
                        </div>
                      </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width: 20rem; margin-top: 1cm;">
                    <img src= "./Img/Tipos de patinaje.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Tipos de patinaje</h5>
                      <p class="card-text">¿Sabias que existen mundiales de patinaje? Aqui te contamos que categorias existen!</p>
                      <a href="{{route('patinaje')}}" class="btn btn-primary">Ver</a>
                    </div>
                </div>
                </div>

                <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="width: 20rem; margin-top: 1cm;">
                    <img src= "./Img/Tipos de freno.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Tipos de frenos</h5>
                      <p class="card-text">En el patinaje siempre se busca estar en movimeinto, pero tambien es importante saber detenerse</p>
                      <a href="{{route('frenos')}}" class="btn btn-primary">Ver</a>
                    </div>
                  </div>
                </div>

            </div>
        </div>
      </div>


@endsection