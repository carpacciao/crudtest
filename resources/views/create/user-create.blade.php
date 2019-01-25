@extends('adminlte::page')

@section('title', 'User Create')

@section('content_header')
<h1>User Create</h1>
@stop

@section('content')
<div class="container">
  <form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="">Name</label>
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text"
        class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Password</label>
      <input type="text"
      class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
    </div>
    <button type="submit" class="btn btn-success">Valider</button>
  </form>
</div>
@stop