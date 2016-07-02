@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success">
				<div class="text-center panel-heading">Doniraj</div>
				<div class="panel-body">
					<br>

					<div class="md-form">
						<input type="text" id="form1" class="form-control">
						<label for="form1" class="">Ime</label>
					</div>
					
					<div class="md-form">
						<input type="text" id="form1" class="form-control">
						<label for="form1" class="">Prezime</label>
					</div>
					

					<div class="md-form">
						<input type="text" id="form1" class="form-control">
						<label for="form1" class="">Iznos</label>
					</div>

					<!--Email validation-->
					<div class="md-form">
						<i class="fa fa-envelope prefix"></i>
						<input type="email" id="form9" class="form-control validate">
						<label for="form9" data-error="wrong" data-success="right">Type your email</label>
					</div>

					<!--Password validation-->
					<div class="md-form">
						<i class="fa fa-lock prefix"></i>
						<input type="password" id="form10" class="form-control validate">
						<label for="form10" data-error="wrong" data-success="right">Type your password</label>

						<a href="{{ url('thankyou') }}" type="button" class="btn btn-primary btn-lg btn-block">Doniraj</a>
					</div>    
				</div>
			</div>
		</div>
	</div>
</div>

@endsection