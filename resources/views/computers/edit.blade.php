@extends('layout')

@section('title')
    create computer
@endsection


@section('content')
<div class="container">
    <div class="card">
        <h1>Edit computer</h1>
        <form action="{{route('computers.update' , ['computer'=>$computer->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <label>name</label>
                <input type="text" placeholder="" value="{{$computer->name}}" name="computer_name">
                @error('computer_name')
                    {{$message}}
                @enderror
            </div>

            <div class="form-row">
                <label>origin</label>
                <input type="text" placeholder="" value="{{$computer->origin}}" name="computer_origin">
                @error('computer_origin')
                    {{$message}}
                @enderror
            </div>

            <div class="form-row">
                <label>price</label>
                <input type="text" placeholder="" value="{{$computer->price}}" name="computer_price">
                @error('computer_price')
                    {{$message}}
                @enderror
            </div>

            <input class="btn-submit" type="submit">


        </form>
    </div>
</div>
@endsection