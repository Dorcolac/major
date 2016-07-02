@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">{{ $post->title }}</div>
                <div class="text-center panel-body">
                    
                    <?php
        //TODO: html
                    ?>

                    @if($post->user_id ==  Auth::user()->id)
                    <form class="col-xs-offset-8 col-md-sm-9 col-md-offset-10" method="POST" action="/post/{{$post->id}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Obriši</button>
                    </form>
                    @endif

                    @if(isset($selected_reply))
                    <h3>Odabrano rešenje</h3>

                    {{$selected_reply->body}}
                    @endif

                    {{--COMMENTS--}}
                    <br><br>
                    <h3>Komentari</h3>


                    {!! BootForm::open()->action('/post_reply') !!}
                    {!! BootForm::hidden('post_id')->value($post->id) !!}
                    {!! BootForm::textarea("Komentar", 'body')  !!}
                    {!! BootForm::text("Cena", 'price')  !!}
                    {!! BootForm::submit() !!}
                    {!! BootForm::close() !!}
                    <ul>
                        @foreach($replies as $reply)
                        <hr>
                        <li>
                            Odgovor: {{$reply->body}}<br>
                            Cena: {{$reply->price}}<br>
                            Korisnik: {{$reply->user->name}} {{$reply->user->lastname}} {{$reply->user->nickname}}
                            @if($reply->is_choosen)
                            <i class="fa fa-check-circle green-text" aria-hidden="true"></i>
                            @endif


                            @if($post->user_id ==  Auth::user()->id)
                            <div>
                                <form method="POST" action="/solution_select/{{$reply->id}}">
                                    {{csrf_field()}}
                                    <button class="btn btn-warning">Selektuj</button>
                                </form>

                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection