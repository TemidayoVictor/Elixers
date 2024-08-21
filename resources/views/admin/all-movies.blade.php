@extends('layouts.base')

@section('title')
Admin | All Products
@endsection


@section('content')

    <section class="movies container margin-top" id="popular">
        <div class="heading">
            <h2 class="heading-title">Welcome Back, {{ Session::get('name') }}</h2>
        </div>

        <h1 class="page-title"> 
            {{ $genre }} Products
        </h1>

        <div class="filter">
            <form action="{{ route('filterMovieList') }}" method='POST'>        
                @csrf
                @if (session('message'))
                    <div class="input-field alert success inner">
                        <p>{{ session('message') }}</p>
                    </div>
                @endif
                <select name="genre" id="" required>
                    <option value="">Filter By Category</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->genre }}">{{ $genre->genre }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Filter" class="submit">
                
            </form>
        </div>

        <div class="purchase-list admin">        
            @forelse ($movies as $movie)
                <div class="purchase-box">
                    <div class="purchase-image">
                        @if ($movie->images->isNotEmpty())
                            <img src="{{ asset('images/'.$movie->images->last()->image) }}" alt="" class="movie-box-img">
                        @else
                            <img src="{{ asset('images/bg3.jpg') }}" alt="" class="movie-box-img">
                        @endif
                        
                    </div>
                    <div class="movie-list-details">
                        <div class="movie-name">
                            <p>{{ $movie->name }}</p>
                        </div>
                        <div class="movie-list-sub-details">
                            <p>{{Str::limit (($movie->description), 80) }}</p>
                            <p><strong>Genre:</strong> {{ $movie->genre }}</p>
                        </div>
                        <div class="utils flex">
                            <a href="{{ route('editMovie', ['id' => $movie->id]) }}" class="edit">Edit</a>
                            <form action="{{ route('deleteMovie', ['id' => $movie->id]) }}" method="POST">
                                @csrf
                                <input style="background-color: transparent; border: none; color: orangered; text-decoration: underline; font-size:1rem" type="submit" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <h2>No Product Uploaded yet</h2>
                </div>
            @endforelse

        </div>
    </section>

@endsection


