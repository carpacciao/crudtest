@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Users <a href="{{route('users.create')}}" class="btn btn-outline-primary">Create</a></h1>
@stop

@section('content')
  <div class="container">
    <span>id: {{$user->id}}</span>
    <form action="{{route('users.update', ['id' => $user->id])}}" method="POST">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="">Name</label>
        <input type="text"
          class="form-control" name="name" id="" aria-describedby="helpId" placeholder="{{$user->name}}">
      </div>
      <div class="form-group">
        <label for="">email</label>
        <input type="text"
          class="form-control" name="email" id="" aria-describedby="helpId" value="{{$user->email}}">
      </div>
      {{-- <div class="form-group">
        <label for="">password</label>
        <input type="text"
          class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
      </div> --}}
      <button class="btn btn-success" type="submit">Valider</button>
    </form>
    <form action="{{route('users.destroy', ['id' => $user->id])}}" method="POST">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit">Delete</button>
    </form>
  </div>
@stop