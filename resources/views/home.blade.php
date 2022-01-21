@extends('layout.main')

@section('content-movies')
    <div class="container">
        <h1 class="text-center my-5">MOVIES</h1>
       <div class="row justify-content-center">
        @foreach ($movies as $movie)
            <div class="col-4 mb-4">
                <div class="card d-flex flex-column p-3 h-100">
                    <h2 class="text-center">{{ $movie->title }}</h1>
                    <span class="fs-3"><strong>Original title: </strong>{{ $movie->original_title }}</span>
                    <span class="fs-3"><strong>Nationality: </strong>{{ $movie->nationality }}</span>
                    <span class="fs-3"><strong>Date: </strong>{{ $movie->date }}</span>
                    <span class="fs-3"><strong>Vote: </strong>{{ $movie->vote }}</span>
                </div>
            </div>
        @endforeach
       </div>

    </div>
@endsection