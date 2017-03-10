@extends('sitePage')

@section('title')
  {{$pageTitle}}
@stop

@section('content')
<div class="container">
  <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

          <h1 class="page-header">
              <p>{{$title}}</p>
              <p><small>{{$subtitle}}</small></p>
          </h1>

          <!-- First Blog Post -->
          <h2>
              <a href="{{url('blogArticle')}}">Titulo Articulo</a>
          </h2>
          <p class="lead">
              por <a href="{{url('blogArticle')}}">Eduardo Gonzalez Calderon</a>
          </p>
          <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;28 de Agosto 2013 - 10:00 PM</p>
          <hr>
          <img class="img-responsive" src="http://placehold.it/900x300" alt="">
          <hr>
          <p>Aqui debera leerse una breve descripcion del articulo en cuestion. Ella debera contar con todo el contenido basico para entender de que trata el mismo. Es decir sera un resumen con lo mas importante que permita atrapar al lector para que continue leyendo</p>
          <a class="btn btn-primary" href="{{url('blogArticle')}}">Leer Articulo <span class="glyphicon glyphicon-chevron-right"></span></a>

          <hr>
          <!-- First Blog Post -->
          <h2>
              <a href="{{url('blogArticle')}}">Titulo Articulo</a>
          </h2>
          <p class="lead">
              por <a href="{{url('blogArticle')}}">Eduardo Gonzalez Calderon</a>
          </p>
          <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;28 de Agosto 2013 - 10:00 PM</p>
          <hr>
          <img class="img-responsive" src="http://placehold.it/900x300" alt="">
          <hr>
          <p>Aqui debera leerse una breve descripcion del articulo en cuestion. Ella debera contar con todo el contenido basico para entender de que trata el mismo. Es decir sera un resumen con lo mas importante que permita atrapar al lector para que continue leyendo</p>
          <a class="btn btn-primary" href="{{url('blogArticle')}}">Leer Articulo <span class="glyphicon glyphicon-chevron-right"></span></a>

          <hr>
          
          <!-- First Blog Post -->
          <h2>
              <a href="{{url('blogArticle')}}">Titulo Articulo</a>
          </h2>
          <p class="lead">
              por <a href="{{url('blogArticle')}}">Eduardo Gonzalez Calderon</a>
          </p>
          <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;28 de Agosto 2013 - 10:00 PM</p>
          <hr>
          <img class="img-responsive" src="http://placehold.it/900x300" alt="">
          <hr>
          <p>Aqui debera leerse una breve descripcion del articulo en cuestion. Ella debera contar con todo el contenido basico para entender de que trata el mismo. Es decir sera un resumen con lo mas importante que permita atrapar al lector para que continue leyendo</p>
          <a class="btn btn-primary" href="{{url('blogArticle')}}">Leer Articulo <span class="glyphicon glyphicon-chevron-right"></span></a>

          <hr>               
  
          <nav aria-label="Page navigation">
          <div class="text-center">
            <ul class="pagination">
              <li>
                <a href="{{url('blogArticle')}}" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="{{url('blogArticle')}}">1</a></li>
              <li><a href="{{url('blogArticle')}}">2</a></li>
              <li><a href="{{url('blogArticle')}}">3</a></li>
              <li><a href="{{url('blogArticle')}}">4</a></li>
              <li><a href="{{url('blogArticle')}}">5</a></li>
              <li>
                <a href="{{url('blogArticle')}}" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
            </div>
          </nav>
      </div>
  </div>
  <hr>
</div>
@stop

