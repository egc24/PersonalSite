@extends('sitePage')

@section('title')
  Resume - Eduardo Gonzalez Calderon
@stop

@section('content')
<div class="container">
	<object data="files/CV.pdf" type="application/pdf" width="100%" height="800px"> 
	<p>It appears you don't have a PDF plugin for this browser.
	No biggie... you can <a href="resume.pdf">click here to
	download the PDF file.</a></p>  
	</object>
</div>

@stop



    