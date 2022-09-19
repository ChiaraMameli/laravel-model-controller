@extends('layouts.main')

@section('main-content')
    <div class="d-flex flex-wrap justify-content-between text-center">
        @foreach($movies as $movie)
            <a href="">
                <div class="_card">
                    <h2>{{$movie->original_title}}</h2>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection