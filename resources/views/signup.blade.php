@extends('layouts.base')

@section('title')
Subscribe
@endsection

@section('content')

<div class="form-container">
    <div class="welcome-text">
        <h2><span>Elixirs</span></h2>
        <p>Let's Keep You In The Know</p>
    </div>
    <div class="form">
        <!-- <div class="alert success">
            <p>Incorrect username</p>
        </div> -->
        <form action="{{ route('signup') }}" method="POST">
            @csrf 
            
            @if (session('message'))
                <div class="input-field alert success inner">
                    <p>{{ session('message') }}</p>
                </div>
            @endif           
            
            @if (session('success'))
                <div class="input-field alert success inner">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="input-field">
                <div class="user-details">
                    <i class="bx bx-user"></i>
                    <label for="">Full Name</label>
                </div>
                <input type="text" placeholder="Your Full name" name="name" value="{{ old('name') }}" style="@error('name') border: 1px solid red; @enderror"> 
            </div>

            @error('name')
                <div class="input-field alert danger inner">
                    <p>{{ $message }}</p>
                </div> 
            @enderror


            <div class="input-field">
                <div class="user-details">
                    <i class="bx bx-map"></i>
                    <label for="">Location (City, State)</label>
                </div>
                <input type="text"placeholder="Your Address" name="address" value="{{ old('address') }}" style="@error('address') border: 1px solid red; @enderror">     
            </div>

            @error('address')
                <div class="input-field alert danger inner">
                    <p>{{ $message }}</p>
                </div> 
            @enderror

            <div class="input-field">
                <div class="user-details">
                    <i class="bx bx-phone"></i>
                    <label for="">Phone Number</label>
                </div>
                <input type="text"placeholder="Your Phone Number" name="phone" value="{{ old('phone') }}" style="@error('phone') border: 1px solid red; @enderror">     
            </div>

            @error('phone')
                <div class="input-field alert danger inner">
                    <p>{{ $message }}</p>
                </div> 
            @enderror


            <div class="input-field">
                <div class="user-details">
                    <i class="bx bx-envelope"></i>
                    <label for="">Email Address</label>
                </div>
                <input type="email"placeholder="Your Email" name="email" value="{{ old('email') }}" style="@error('email') border: 1px solid red; @enderror">     
            </div>

            @error('email')
                <div class="input-field alert danger inner">
                    <p>{{ $message }}</p>
                </div> 
            @enderror

            {{-- <div class="input-field">
                <div class="user-details">
                    <i class="bx bx-key"></i>
                    <label for="">Password</label>
                </div>
                <input type="password" placeholder="Your Password" name="password" value="{{ old('password') }}" style="@error('password') border: 1px solid red; @enderror">     
            </div>

            @error('password')
                <div class="input-field alert danger inner">
                    <p>{{ $message }}</p>
                </div> 
            @enderror

            <div class="input-field">
                <div class="user-details">
                    <i class="bx bx-key"></i>
                    <label for="">Confirm Password</label>
                </div>
                <input type="password" placeholder="Confirm Password" name="password_confirmation">     
            </div> --}}

            <div class="bod-bot"></div>

            <input class="submit" type="submit" value="Subscribe">
            
        </form>
    </div>
</div>

@endsection