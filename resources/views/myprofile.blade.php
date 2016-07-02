@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="text-center panel-heading">Izmeni svoj profil</div>
                <div class="panel-body">
				{!! BootForm::open()->action('/me')->method('POST') !!}
				{!! BootForm::text('Ime', 'name')->value($user->name) !!}
				{!! BootForm::text('Prezime', 'lastname')->value($user->lastname) !!}
				{!! BootForm::text('Nadimak', 'nickname')->value($user->nickname) !!}
				{!! BootForm::text('O meni', 'bio')->value($user->bio) !!}
				{!! BootForm::text('Telefon 1', 'phone1')->value($user->phone1) !!}
				{!! BootForm::text('Telefon 2', 'phone2')->value($user->phone2) !!}
				{!! BootForm::text('Lokacija', 'location')->value($user->location) !!}
				{!! BootForm::submit('Izmeni') !!}
				{!! BootForm::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection