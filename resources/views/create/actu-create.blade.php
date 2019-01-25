@extends('adminlte::page')

@section('title', 'Actu Create')

@section('content_header')
<h1>Actu Create</h1>
@stop

@section('content')
<div class="container">
  <form action="{{route('actus.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="">Title</label>
      <input type="text"
        class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Text</label>
      <textarea class="form-control" name="text" id="" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="">Image url</label>
      <input type="text"
      class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
    </div>
    <button type="submit" class="btn btn-success">Valider</button>
  </form>
</div>
@stop
