@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="center col-xs-offset-1 pagination-centered col-xs-6 col-md-2 col-md-offset-2">
			<div class="avatar view"><img src="/images/avatars/default.jpg" class="img-circle img-fluid img-responsive" alt="avatar"></div> <br>
		</div>
		<div class="text-center col-md-6 col-md-offset-1">
			<h3>Ćao, ja sam <strong>{{ $user->name }} {{ $user->lastname }}</strong>, <br> ali me zovi <strong>{{ $user->nickname }}</strong></h3>
			<br>
			<h5>Saznaj nešto više o meni:</h5>
			{{ $user->bio }}
		</div>
		<br>
	</div>
	<div class="col-md-6 col-md-offset-2">
	<strong>Ja sam iz</strong> - {{ $user->location }}
	</div>
	<div class="col-md-6 col-md-offset-2">
		<strong>Telefon 1</strong> - {{ $user->phone1 }}
	</div>
	<div class="col-md-6 col-md-offset-2">
		<strong>Telefon 2</strong> - {{ $user->phone2 }}
	</div>
</div>

@endsection