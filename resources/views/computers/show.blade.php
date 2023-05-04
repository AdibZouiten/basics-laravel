@extends('layout')
@section('title')
    show Computer
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <h3>{{$computer['name']}} is from <strong> {{$computer['origin']}}</strong></h3>
            <h4>this computers ID is {{$computer['id']}}</h4>
            <h4>the price is  {{$computer['price']}}$</h4>
            <a class="btn btn-edit" href="{{route('computers.edit', ['computer' => $computer['id']])}}">Edit</a>
            <form style="display: inline; background-color:transparent;" action="{{route('computers.destroy', ['computer' => $computer['id']])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-delete">delete</button>
            </form>
        </div>
    </div>
@endsection