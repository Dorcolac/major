@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
         <div class="panel panel-success">
             <div class="panel-heading">Dobrodošli na upomocmajstore.com!</div>
             <div class="panel-body text-center">
             <br>
                Odaberite Vama prikladnu opciju:
            </div>
            <div class="text-center">
                <a class="btn btn-primary btn-block" href="{{ url('/post/create') }}"><i class="fa fa-warning right"></i> Imam problem</a>
                <p>ili</p>
                <a class="btn btn-primary btn-block" href="{{ url('/post') }}"><i class="fa fa-wrench right"></i> Želim da pomognem</a>
                <br>
                <i tabindex=0 class="col-sm-offset-0 fa fa-question-circle right helper-button orange-text" role="button" data-animation="true" data-toggle="popover" data-trigger="click" data-placement="bottom" title="Da li pomažete ili tražite pomoć?" data-content="U zavisnosti od toga šta Vam treba, odaberite odgovarajuću opciju. Ukoliko tražite majstora da reši Vaš problem, kliknite na Imam problem, a ukoliko ste Vi majstor i želite da pomognete drugima, kliknite na Želim da pomognem."></i>
            </div>
            
            <br><br>
            <div class="panel-heading">ili pak želite pre svega da saznate nešto više o sajtu:</div>

            <div class="panel-body">Upomocmajstore.com je web aplikacija koja je nastala kao studentski projekat sa ciljem da omogući kvalitetno širenje freelancinga među majstorima. Freelancing među majstorima u Srbiji je već zastupljen odavno, ali ova aplikacija ima nameru da poboljša produktivnost i širu podelu neophodnih informacija.</div>


        </div>
    </div>
</div>
</div>
@endsection
