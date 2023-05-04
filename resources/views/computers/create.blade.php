@extends('layout')

@section('title')
    create computer
@endsection


@section('content')
    <div class="container">
        <div class="card">
            <h1>Create new computer</h1>
            <form action="{{route('computers.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <label>name</label>
                    <input type="text" placeholder="" value="{{old('computer_name')}}" name="computer_name">
                    @error('computer_name')
                        {{$message}}
                    @enderror
                </div>

                <div class="form-row">
                    <label>origin</label>
                    <input type="text" placeholder="" value="{{old('computer_origin')}}" name="computer_origin">
                    @error('computer_origin')
                        {{$message}}
                    @enderror
                </div>

                <div class="form-row">
                    <label>price</label>
                    <input type="text" placeholder="" value="{{old('computer_price')}}" name="computer_price">
                    @error('computer_price')
                        {{$message}}
                    @enderror
                </div>

                <input class="btn-submit" type="submit">


            </form>
        </div>
    </div>
@endsection