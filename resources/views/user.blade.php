@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Users <a href="{{route('users.create')}}" class="btn btn-outline-primary">Create</a></h1>
@stop

@section('content')
<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">link</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td><a href="{{route('users.show', ['id' => $user->id ])}}" class="btn btn-primary">show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop