{{-- estendo il file app.blade.php --}}
@extends('layout.app')

{{-- passo il contenuto   --}}
@section('title', 'movies') {{--aggiungo codice all'interno del segnaposto content--}}

{{-- passo il contenuto   --}}
@section('content') {{--aggiungo codice all'interno del segnaposto content--}}
    <div class="container">
        {{-- @dd($movies[0]['title']) --}}
        
            @foreach ($movies as $movie)
                <div class="film">
                   <h1>{{$movie['title']}}</h1>
                    <h2>{{$movie['original_title']}}</h2>
                    <p>{{$movie['nationality']}}</p>
                    <p>{{$movie['date']}}</p>
                    <p>{{$movie['vote']}}</p>
                </div>
            @endforeach
        
    </div>
@endsection
