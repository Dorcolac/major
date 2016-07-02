@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success">
				<div class="text-center panel-heading">Hvala na donaciji!</div>
				<div class="text-center panel-body">
				<h4>Veoma smo zahvalni na Vašoj velikodušnosti!</h4>

				<a href="{{ url('/') }}">Vrati se na početnu</a>
    
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
