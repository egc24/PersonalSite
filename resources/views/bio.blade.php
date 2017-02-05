@extends('sitePage')

@section('title')
  Bio - Eduardo Gonzalez Calderon
@stop

@section('links')
  <link href="css/bio.css" rel="stylesheet">
@stop

@section('content')
<div class="container">
<!--<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1>Horizontal timeline</h1>
      </div>
      <div style="display:inline-block;width:100%;overflow-y:auto;">
      <ul class="timeline timeline-horizontal">
        <li class="timeline-item">
          <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 1</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis faiz elementum girarzis, nisi eros gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 2</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis faiz elementum girarzis, nisi eros gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 3</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipisci. Mé faiz elementum girarzis, nisi eros gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 4</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 5</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 6</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </div> -->
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1>Timeline</h1>
      </div>
      <ul class="timeline">
        <li class="timeline-item">
          <div class="timeline-badge"><i class="glyphicon glyphicon-off"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 1</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 2</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 3</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              
            </div>
          </div>
        </li>
        <li class="timeline-item">
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds 4</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <ul class="row gallery">
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-174908-rocking-the-night-away-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-460760-colors-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-461673-retro-party-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-514834-touchscreen-technology-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-916206-legal-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-1062948-nature-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-1471528-insant-camera-kid-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-2255072-relaxed-man-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-2360379-colors-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-2360571-jump-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-2361384-culture-for-business-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-2943363-budget-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-3444921-street-art-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-3552322-insurance-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-3807845-food-s.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-3835655-down-office-worker-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-5771958-health-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-352207-search-of-code-s.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-247190-secret-email-xs.jpg">
    </li>
    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 galleryItem">
        <img class="img-responsive galleryImage" src="images/photodune-682990-online-search-xs.jpg">
    </li>
  </ul>  
  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1> 
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive,
    mobile-first projects on the web.</p> 
  </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">         
      <div class="modal-body">                
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop

@section('scripts')
  <script src="js/bio.js"></script>
@stop


    