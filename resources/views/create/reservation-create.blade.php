@extends('adminlte::page')

@section('title', 'Article Create')

@section('content_header')
<h1>Article Create</h1>
@stop

@section('content')
<div class="container">
  <form action="{{route('reservations.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="">From</label>
      <input type="date"
        class="form-control" name="date_from" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">To</label>
      <input type="date"
        class="form-control" name="date_to" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text"
      class="form-control" name="address" id="image" aria-describedby="helpId" placeholder="">
    </div>
    <button type="submit" class="btn btn-success">Valider</button>
  </form>
</div>
@stop