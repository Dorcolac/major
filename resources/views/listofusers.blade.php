@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel text-center col-md-6 col-md-offset-3">
			<div class="panel panel-heading">Lista svih korisnika</div>
			<ul class="list-group">
				@foreach($users as $user)

				<li class="list-group-item">{{$user->name}} {{$user->lastname}} <a href="/user/{{$user->id}}">Poseti nalog</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection