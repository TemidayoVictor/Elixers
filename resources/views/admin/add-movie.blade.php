@extends('layouts.base')

@section('title')
Admin | Add Product
@endsection

@section('content')
    <section class="movies container margin-top" id="popular">
        <div class="heading">
            <h2 class="heading-title">Welcome Back, {{ Session::get('name') }}</h2>
        </div>

        <div class="filter">
            <form action="{{ route('changeAdd') }}" method="post">
                @csrf
                <select name="genre" id="">
                    <option value="1">Add New Product</option>
                    <option value="2">Add New Category</option>
                    <option value="3">Add New Admin</option>
                </select>
                <input type="submit" value="Change" class="submit">
            </form>
        </div>

        <h1 class="page-title profile">
            Add New Product
        </h1>

        <div class="form-container profile">
            <div class="form">
                
                <form action="{{ route('addMovie') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
            
                    @if (session('message'))
                        <div class="input-field alert success inner">
                            <p>{{ session('message') }}</p>
                        </div>
                    @endif

                    <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-tv"></i>
                            <label for="">Name of Product</label>
                        </div>
                        <input type="text"placeholder="Name of Product" name="name" value="{{ old('name') }}" style="@error('name') border: 1px solid red; @enderror" >     
                    </div>

                    @error('name')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-pen"></i>
                            <label for="">Short Description / Review</label>
                        </div>
                        <textarea type="text"placeholder="Product Description" name="description" value="{{ old('description') }}" style="@error('description') border: 1px solid red; @enderror">{{ old('description') }}</textarea>
                    </div>

                    @error('description')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-book"></i>
                            <label for="">Category of Product</label>
                        </div>
                        <select name="category" id="" value="{{ old('category') }}" style="@error('category') border: 1px solid red; @enderror">
                            <option value="@if(!empty(old('category'))){{ old('category') }} @else {{ "" }} @endif">@if(!empty(old('category'))){{ old('category') }} @else Choose Category @endif</option>
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->genre }}">{{ $genre->genre }}</option>
                            @endforeach
                        </select>    
                    </div>

                    @error('category')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-image"></i>
                            <label for="">Images of Product</label>
                        </div>
                        <input type="file" accept="image/*" name="images[]" value="{{ old('images') }}" style="@error('images') border: 1px solid red; @enderror" multiple required>     
                    </div>

                    @error('images')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-video"></i>
                            <label for="">Size / Quantity</label>
                        </div>
                        <input type="text" name="size" value="{{ old('size') }}" style="@error('size') border: 1px solid red; @enderror">     
                        
                    </div>

                    @error('size')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-money"></i>
                            <label for="">Price of Product</label>
                        </div>
                        <input type="number" name="price" value="{{ old('price') }}" style="@error('price') border: 1px solid red; @enderror">     
                    </div>

                    @error('price')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    <div class="bod-bot"></div>
        
                    <input class="submit" type="submit" value="Add Product">
                    
                </form>
            </div>
        </div>
    </section>
    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit blanditiis aut provident, dignissimos soluta fuga alias sed incidunt beatae cumque? Inventore animi earum consequuntur rem fuga nobis! Eveniet, quaerat quas. --}}
@endsection
