@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="text-center panel-heading">Postavi novi problem</div>
                <div class="panel-body">
                    {!! BootForm::open()->action('/post')!!}
                    {!! BootForm::text('Naslov', 'title') !!}
                    {!! BootForm::textarea('Opis', 'body') !!}
                    <div class="text-center">
                        <i tabindex=0 class="col-sm-offset-0 fa fa-question-circle right helper-button orange-text" role="button" data-animation="true" data-toggle="popover" data-trigger="click" data-placement="bottom" title="Naslov i opis" data-content="U polju naslov ukratko opišite Vaš problem. Polje opis služi za detaljniji opis Vašeg problema. Sve kucajte u jednom redu, novi red se neće učitati kao novi red."></i>
                    </div>
                    {!! BootForm::select('Okrug', 'area_id')->options($options) !!}
                    {!! BootForm::text('Lokacija', 'location') !!}
                    <div class="text-center">
                        <i tabindex=0 class="col-sm-offset-0 fa fa-question-circle right helper-button orange-text" role="button" data-animation="true" data-toggle="popover" data-trigger="click" data-placement="bottom" title="Oblast i lokacija" data-content="Kao oblast odaberite u kom okrugu Srbije bi trebalo da se odvijali radovi vezani za Vaš problem, a u polju lokacija upišite ime naselja. Na primer: Oblast - Šumadijski okrug, Lokacija - Beograd, Stari Grad"></i>
                    </div>
                    {!! BootForm::text('Budžet', 'budget') !!}
                    <div class="text-center">
                        <i tabindex=0 class="col-sm-offset-0 fa fa-question-circle right helper-button orange-text" role="button" data-animation="true" data-toggle="popover" data-trigger="click" data-placement="bottom" title="Budžet" data-content="U polju budžet unesite koliki je Vaš budžet za izvođenje radova. Budžet je isključivo u RSD, i ne pišite ništa osim cifara i isključivo celih brojeva!"></i>
                    </div>
                    {!! BootForm::select('Kategorija', 'category_id')->options($categories) !!}
                    <div class="text-center">
                    <i tabindex=0 class="col-sm-offset-0 fa fa-question-circle right helper-button orange-text" role="button" data-animation="true" data-toggle="popover" data-trigger="click" data-placement="bottom" title="Kategorija" data-content="U polju kategorija odaberite kakvoj vrsti radova pripada problem koji imate. Ne zaboravite da pritisnete dugme Pošalji na kraju, kako bi vaš problem bio ažuriran na listi problema."></i>
                    </div>
                    {!! BootForm::submit('Pošalji')->class('btn btn-primary btn-lg btn-block') !!}
                    {!! BootForm::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection