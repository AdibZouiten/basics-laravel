@extends('layout')
@section('title')
    Computers
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <h2>This is the Computers page</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio perferendis consectetur quaerat quas temporibus placeat, cumque similique minus labore qui sit provident itaque, facilis recusandae accusantium eum dignissimos cupiditate reiciendis.</p>
            <a href="{{ route('computers.create') }}" class="btn-add">Create new computer</a> 
        </div>
        <div>
            <table border="1">
                @if(count($computers))
                <ul class="list">
                    @foreach ($computers as $computer)
                        <a class="list-link" href="{{ route('computers.show', ['computer' => $computer['id']])  }}">
                            <li class="list-item">
                                {{$computer['name']}} is from <strong> {{$computer['origin']}} - {{$computer['price']}}$ </strong>
                            </li>
                        </a>
                    @endforeach
                </ul>
                @else
                    <h1>
                        no computers to display
                    </h1>
                @endif
            </table>
        </div>
    </div>
@endsection