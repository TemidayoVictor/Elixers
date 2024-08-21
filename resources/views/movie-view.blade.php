@extends('layouts.base')

@section('title')
{{ $movie->name }}
@endsection

@section('lightGalleryCss')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="mag-top movies-content container">
        @if ($movie->images->isNotEmpty())
            @forelse ($movie->images as $image )
                <a class="movie-box" href="{{ asset('images/'.$image->image) }}">
                    <img src="{{ asset('images/'.$image->image) }}" alt="" class="movie-box-img">
                </a>
            @empty
                
            @endforelse
        @endif
    </div>

    {{-- <div class="play-container container">
                
        <div class="play-text">
            <h2>{{ $movie->name }}</h2>
            <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>

            <div class="flex-2">
                <div class="tags">
                    <span>{{ $movie->genre }}</span>
                </div>

                <div class="tags">
                    <span>{{ $movie->size }}</span>
                </div>
            </div>
        </div> 
        <!-- <i class="bx bx-right-arrow play-movie"></i>         -->

    </div> --}}

    <div class="about-movie container">
        <h2>{{ $movie->name }}</h2>
        
        <div class="flex-2">
            <div class="tags">
                <span>{{ $movie->genre }}</span>
            </div>

            <div class="tags">
                <span>{{$movie->size}}</span>
            </div>

            <div class="tags">
                <span>#{{$movie->price}}</span>
            </div>
        </div>
        
        <p>        
            {{ $movie->description }}
        </p>

        @if (session('message'))
            <div class="filter">                
                <div class="input-field alert success inner">
                    <p>{{ session('message') }}</p>
                </div>
            </div>            
        @endif

    </div>

    {{-- @if ((auth()->user() && auth()->user()->type == "client"))
        <form action="{{ route('purchase', ['id' => $movie->id]) }}" class="purchase container" method="POST">
            @csrf
            <input type="submit" value="Purchase Movie">
        </form>
    @else
        <form class="purchase container">
            @csrf
            <a href="{{ route('login') }}" style="color: #ffb43a; text-decoration: underline">Login as a Client to Purchase</a>
        </form>
    @endif --}}


@endsection

@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script>
        lightGallery(document.querySelector('.movies-content'));
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
@endsection
