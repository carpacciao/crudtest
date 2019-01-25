@extends('adminlte::page')

@section('title', 'Article')

@section('content_header')
<h1>Articles <a href="{{route('articles.create')}}" class="btn btn-outline-primary">Create</a></h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-4 mt-5">
            <div class="card" style="">
                <img src="{{$article->image}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->text}}</p>
                    <a href="{{$article->site}}" class="btn btn-primary">Visit site</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
