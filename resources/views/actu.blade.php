@extends('adminlte::page')

@section('title', 'Actus')

@section('content_header')
<h1>Actus <a href="{{route('actus.create')}}" class="btn btn-outline-primary">Create</a></h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        @foreach ($actus as $actu)
        <div class="col-4">
            <div class="card mb-3">
                <img src="{{$actu->image}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$actu->title}}</h5>
                    <p class="card-text">{{$actu->text}}</p>
                    <p class="card-text"><small class="text-muted">Date: {{$actu->date}}</small>&nbsp;&nbsp;&nbsp;<small class="text-muted text-right">likes: {{$actu->likes}}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
