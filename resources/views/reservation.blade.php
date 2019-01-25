@extends('adminlte::page')

@section('title', 'Reservation')

@section('content_header')
    <h1>Reservations <a href="{{route('reservations.create')}}" class="btn btn-outline-primary">Create</a></h1>
@stop

@section('content')
<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Date from</th>
        <th scope="col">Date to</th>
        <th scope="col">Address</th>
        <th scope="col">From user</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr>
                <th scope="row">{{$reservation->id}}</th>
                <td>{{$reservation->date_from}}</td>
                <td>{{$reservation->date_to}}</td>
                <td>{{$reservation->address}}</td>
                <td>{{$reservation->from_user}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop