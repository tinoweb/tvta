@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<!--==========Mensagem========-->
    		@include('layouts._includes._flash-message')
    		
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form action="{{ route('admin.login') }}" method="post">
						{{ csrf_field() }}
						@include('admin.login._form')
						<div class="form-group">
					        <div class="col-md-8 col-md-offset-4">
					            <button type="submit" class="btn btn-primary">
					                Login
					            </button>
					            <!--a class="btn btn-link" href="">
					                Forgot Your Password?
					            </a-->
					        </div>
	    				</div>
    				</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
