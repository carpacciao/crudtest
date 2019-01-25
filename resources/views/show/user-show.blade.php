@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Users <a href="{{route('users.create')}}" class="btn btn-outline-primary">Create</a></h1>
@stop

@section('content')
  <div class="container">
    <p>{{$user->id}}</p>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <a href="{{route('users.edit', ['id'=>$user->id])}}" class="btn btn-primary">Edit</a>
  </div>
@stop