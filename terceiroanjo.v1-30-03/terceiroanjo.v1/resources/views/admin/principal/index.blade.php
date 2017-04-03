@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="css/panel.css">

	<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"-->


    <div class="panel-heading">Principal Admin</div>
    <!--div class="panel-body">
        Bem Vindo!!
    </div-->
	<!--div class="row">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Apps</a>
          <a href="#" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Bookmarks</a>
          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Reports</a>
          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Comments</a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Users</a>
          <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Notes</a>
          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Photos</a>
          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>Tags</a>
        </div>
    </div-->
@endsection

@section('panels')
	<a href="#" data-toggle="modal" data-target="#nome">
	    <div class="col-md-2">
	      <div data-toggle="tooltip" data-placement="bottom" title="Visualizar as pessoas que estão no carro de sssss" class="panel panel-vendas">
	        <div class="panel-heading">
	          <div class="row">
	            <div class="col-xs-3">
	              <i class="fa fa-car fa-4x"></i>
	            </div>
	          </div>
	        </div>
	        <div class="panel-footer vend">
	          <span class="pull-left">AAAAAAAAAAA</span>
	          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	          <div class="clearfix"></div>
	        </div>
	      </div>
	    </div>
    </a>
  	<!-- Modal >
    <div id="nome" class="modal fade" role="dialog">
	    <div class="modal-dialog modal-lg" style="">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">
	            <a href="Agendamentos.php">
	              <i class='fa fa-close' style="color:#434a54"></i>
	            </a>
	          </button>
	          <h4 class="modal-title"> Carro AAAAAAAA ?></h4>
	        </div>                        
	        <div class="modal-body">
	          <div class="panel-body">
	            hhhhhhhhhhhhhhhh
	          </div>
	        </div>
	      </div>                  
	    </div>                    
	</div-->

	<!--div class="row">
        <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card blue-grey darken-4">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
    </div-->
            
@endsection