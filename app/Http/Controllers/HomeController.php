<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class HomeController extends Controller
{
    //
    public function index() {
        $popular = Movie::with('images')->orderBy('id', 'DESC')->get();
        $movies = Movie::with('images')->get();
        return view('home', [
            'upperNav' => 'nil',
            'sideNav' => 'home',
            'popular' => $popular,
            'movies' => $movies,
        ]);
    }
}
