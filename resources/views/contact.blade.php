@extends('sitePage')

@section('title')
  Contact - Eduardo Gonzalez Calderon
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="well">
                <h4><i class="fa fa-user fa-1x" style="color: black;">&nbsp;Contacto</i></h4>
                <p>Eduardo Gonzalez Calderon</p>                             
                <br>                  
                <h4><i class="fa fa-home fa-1x" style="color: black;"></i>&nbsp;Direccion</h4>
                <p>Monroe 4839, CABA, Argentina</p>
                <br>
                <h4><i class="fa fa-phone fa-1x" style="color: black;"></i>&nbsp;Telefonos</h4>
                <p>+54-11-6106-3874</p>                    
                <p>+54-11-4523-7656</p>
                <br>                    
                <h4><i class="fa fa-envelope fa-1x" style="color: black;"></i>&nbsp;Mail</h4>
                <p>egc.utnfrba@gmail.com</p>                    
                <br>
            </div>
        </div>
        <div class="col-sm-6">
          <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" src="https://maps.google.com/maps?q=Monroe 4839, Buenos Aires, Autonomous City of Buenos Aires, Argentina, &t=&z=13&ie=UTF8&iwloc=&output=embed" marginwidth="0"></iframe>
        </div>
    </div>
</div>    
<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Ingrese aqui su Nombre" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Direccion Mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese aqui su Mail" required="required"></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Asunto</label>
                            <input type="text" class="form-control" id="subject" placeholder="Ingrese aqui el Asunto" required="required">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Escriba aqui su mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <button type="button" class="btn btn-default btn-lg rectEmptyButtonBlack">Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>  
@stop

