@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Svi problemi</div>
                <div class="panel-body text-center">
                    @foreach($posts as $post)

                    <div class="media">
                        <div class="media-left">

                        </div>
                        <div class="media-body">
                            <a href="/post/{{$post->id}}">
                                <h4 class="media-heading">{{ str_limit($post->title, $limit = 50, $end = '...') }}</h4>
                            </a>
                            <div>
                                {{ str_limit($post->body, $limit = 300, $end = '...') }}
                            </div>
                            <br>
                            <div><strong>Kategorija:</strong> {{ $post->category->name }}</div>
                            <div><strong>Okrug:</strong> {{ $post->area->name }}</div>
                            <div><strong>Lokacija:</strong> {{ $post->location }}</div>
                            <div><strong>Budžet:</strong> {{$post->budget}}</div>
                            <hr>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <ul class="pager">
                <li class="pager-prev"><a href="#">Novije</a></li>
                <li class="pager-next"><a href="#">Starije</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection