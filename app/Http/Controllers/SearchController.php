<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class SearchController extends Controller
{
    //
    public function search(Request $request) {
        $this->validate($request, [
            'keyword' => 'required',
        ]);

        $keyword = $request->keyword;
        $data = Movie::with('images')->where('name','like', '%'.$keyword.'%')->get();
        return view('genre-view', [
            'upperNav' => 'nil',
            'sideNav' => 'genre',
            'movies' => $data,
            'genre' => "Search",

        ]);
    }
}
