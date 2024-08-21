<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset ('css/swiper-bundle.min.css') }}">
        <link href="{{ asset ('css/boxicons/boxicons-2.1.4/boxicons.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset ('css/style14.css')}}">
        <link rel="shortcut icon" href="{{ asset('images/fav-icon.png') }}" type="image/png" sizes="160x160">
        @yield('lightGalleryCss')
        <title>Elixirs | @yield('title')</title>
    </head>
    <body>
        <header>
            <div class="nav container">
                
                <a href={{ route('home') }} class="logo">
                    Elixirs
                </a>

                <div class="search">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <input type="text" class="search-input" name="keyword" placeholder="Search" required>
                        <input class="links" type="submit" value="Search">
                    </form>
                </div>

                @if(!auth()->user())
                
                    {{-- <a href="{{ route('login') }}" class="links @if ($upperNav == "login") {{ 'active' }} @endif">
                        Login
                    </a>

                    <a href="{{ route('signup') }}" class="links @if ($upperNav == "signup") {{ 'active' }} @endif">
                        Create Account
                    </a> --}}

                @else 
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input class="links btnx" type="submit" value="Logout">
                    </form>
                @endif
                
                <!-- Navbar -->

                <div class="navbar">
                    <a href="{{ route('home') }}" class="nav-link @if ($sideNav == "home") {{ 'nav-active' }} @endif">
                        <i class="bx bx-home"></i>
                        <span class="nav-link-title">Home</span>
                    </a>

                    <a href="{{ route('genres') }}" class="nav-link @if ($sideNav == "genre") {{ 'nav-active' }} @endif">
                        <i class="bx bxs-hot"></i>
                        <span class="nav-link-title">Categories</span>
                    </a>

                    @guest
                        <a href="{{ route('signup') }}" class="nav-link @if ($sideNav == "subscribe") {{ 'nav-active' }} @endif">
                            <i class="bx bxs-user-circle"></i>
                            <span class="nav-link-title">Subscribe</span>
                        </a>
                    @endguest

                    @if (auth()->user() && auth()->user()->type == "client")
                        <a href="{{ route('settings', ['id' => Session::get('id')]) }}" class="nav-link @if ($sideNav == "profile") {{ 'nav-active' }} @endif">
                            <i class="bx bx-user"></i>
                            <span class="nav-link-title">Profile</span>
                        </a>

                        <a href="{{ route('purchaseList', ['id' => auth()->user()->id]) }}" class="nav-link @if ($sideNav == "purchaseList") {{ 'nav-active' }} @endif">
                            <i class="bx bx-money"></i>
                            <span class="nav-link-title">Purchase List</span>
                        </a>
                    @elseif(auth()->user() && auth()->user()->type == "admin")
                        <a href="{{ route('usersList') }}" class="nav-link @if ($sideNav == "userList") {{ 'nav-active' }} @endif">
                            <i class="bx bxs-user"></i>
                            <span class="nav-link-title">Users</span>
                        </a>

                        <a href="{{ route('addMovie') }}" class="nav-link @if ($sideNav == "add") {{ 'nav-active' }} @endif">
                            <i class="bx bx-plus"></i>
                            <span class="nav-link-title">Add Product</span>
                        </a>

                        <a href="{{ route('adminMovieList') }}" class="nav-link @if ($sideNav == "allMovies") {{ 'nav-active' }} @endif">
                            <i class="bx bx-tv"></i>
                            <span class="nav-link-title">All Products</span>
                        </a>

                        {{-- <a href="{{ route('revenue') }}" class="nav-link @if ($sideNav == "revenue") {{ 'nav-active' }} @endif">
                            <i class="bx bx-money"></i>
                            <span class="nav-link-title">Revenue</span>
                        </a> --}}
                    @endif
                </div>
            </div>
        </header>

        <!-- Dynamic Content -->

        @yield('content')

        <!-- Copyright -->

        <div class="copyright container">
            <p>&#169 <span>Elixirs</span> 2023 All Rights Reserved</p>
        </div>
    </body>
    @yield('script')
    <script src="{{ asset ('js/swiper-bundle.min.js') }}"></script>
    <script>
        lightGallery(document.querySelector('.movies-content'));
    </script>
    <script src="{{ asset ('js/index.js') }}"></script>
</html>