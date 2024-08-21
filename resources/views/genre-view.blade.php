@extends('layouts.base')

@section('title')
{{ $genre }} Categories
@endsection

@section('content')

    <section class="movies container margin-top" id="movies">
        <div class="heading">
            <h2 class="heading-title font-fam">{{ $genre }} Perfumes</h2>
            
        </div>

        <div class="movies-content">
            @forelse ($movies as $movie)
            
                <div class="movie-box">
                    @if ($movie->images->isNotEmpty())
                        <img src="{{ asset('images/'.$movie->images->last()->image) }}" alt="" class="movie-box-img">
                    @else
                        <img src="{{ asset('images/bg3.jpg') }}" alt="" class="movie-box-img">
                    @endif
                    <div class="box-text">
                        <p class="movie-title">{{ $movie->name }}</p>
                        <div class="flex">
                            <span class="movie-type">{{ $movie->genre }}</span>
                            <span class="movie-type"># {{ number_format($movie->price) }}</span>
                        </div>
                        <a href="{{ route('movieView', ['id' => $movie->id]) }}" class="btn-line">View more</a>
                        
                    </div>
                </div>
            
            @empty
                <div>
                    <p>Sorry, we are could not find any products related to your search</p>
                </div>
            @endforelse
            

        </div>
    </section>
@endsection