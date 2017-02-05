<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="background-image: url(images/wolfLand.jpg); background-position: center;">
      <img class="img-responsive left-block" src="images/eduardoGonzalezCalderon.png" alt="Eduardo Gonzalez Calderon - Lobo Logo">
    </div>
  </div>
</div>
<nav class="navbar navbar-inverse navbar-static-top" data-spy="affix" data-offset-top="70">
 <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="glyphicon glyphicon-star" style="color: white;" aria-hidden="true"></span>
      </button>
    </div>
    <div class="container-fluid">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Articulo">
          </div>
          <button type="submit" class="btn btn-default" >Buscar</button>
        </form>
        <ul class="nav navbar-nav navbar-left">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre Mi<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{url('bio')}}">Bio</a></li>
              <li><a href="{{url('resume')}}">Resume</a></li>
            </ul>
          </li>
          <li><a href="{{url('blog')}}">Blog</a></li>
          <li><a href="{{url('contact')}}">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 
