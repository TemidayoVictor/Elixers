@extends('layouts.base')

@section('title')
Admin | Edit Products
@endsection

@section('content')
    <section class="movies container margin-top" id="popular">
        <div class="heading">
            <h2 class="heading-title">Welcome Back, {{ Session::get('name') }}</h2>
        </div>

        <h1 class="page-title profile">
            Edit {{ $movie->name }}
        </h1>

        <div class="form-container profile">
            <div class="form">
                
                <form action="{{ route('editMovie', ['id' => $movie->id]) }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text"placeholder="Name of Movie" name="name" value="{{ $movie->name }}" style="@error('name') border: 1px solid red; @enderror" >     
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
                        <textarea type="text"placeholder="Product Description" name="description" value="{{ $movie->description }}" style="@error('description') border: 1px solid red; @enderror">{{ $movie->description }}</textarea>
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
                            <option value="@if(!empty($movie->genre)){{ $movie->genre }} @else {{ "" }} @endif">@if(!empty($movie->genre)){{ $movie->genre }} @else Choose Genre @endif</option>
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
                            <label for="">Add Images</label>
                        </div>
                        <input type="file" accept="image/*" name="images[]" value="{{ old('images') }}" style="@error('images') border: 1px solid red; @enderror" multiple>     
                    </div>

                    @error('images')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    {{-- <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-video"></i>
                            <label for="">Movie asset [Video]</label>
                        </div>
                        <input type="file" accept="video/*" name="video" value="{{ old('video') }}" style="@error('video') border: 1px solid red; @enderror">     
                        <input type="text" name="initialVideo" value="{{ $movie->video }}" readonly>
                        <small>Video size should not exceed 40mb</small>
                    </div>

                    @error('video')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror --}}

                    <div class="input-field">
                        <div class="user-details">
                            <i class="bx bx-video"></i>
                            <label for="">Size / Quantity</label>
                        </div>
                        <input type="text" name="size" value="{{ $movie->size }}" style="@error('size') border: 1px solid red; @enderror">     
                        
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
                        <input type="number" name="price" value="{{ $movie->price }}" style="@error('price') border: 1px solid red; @enderror">     
                    </div>

                    @error('price')
                        <div class="input-field alert danger inner">
                            <p>{{ $message }}</p>
                        </div> 
                    @enderror

                    <div class="bod-bot"></div>
        
                    <input class="submit" type="submit" value="Update Product">
                    
                </form>

                <h2 class="product-title">Product Images</h2>
                <div class="input-images">
                    
                    @forelse ($images as $image)
                    
                        <div>
                            <div class="img-con">
                                <img src={{ asset('images/'.$image->image) }} alt="">
                            </div>
                            <form action="{{ route('deleteImage', ['id' => $image->id]) }}" method="POST" class="button">
                                @csrf
                                <input type="submit" class="btn-2 delete" value="delete">
                            </form>
                        </div>
                    
                    @empty
                    
                    <div>
                        <p>You do not have any image for this product</p>
                    </div>

                    @endforelse
                    
                    
                </div>
            </div>
        </div>
    </section>
    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit blanditiis aut provident, dignissimos soluta fuga alias sed incidunt beatae cumque? Inventore animi earum consequuntur rem fuga nobis! Eveniet, quaerat quas. --}}
@endsection
