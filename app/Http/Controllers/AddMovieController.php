<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Image;

class AddMovieController extends Controller
{
    //
    public function index() {
        $genres = Genre::all();
        return view('admin.add-movie', [
            'upperNav' => 'nil',
            'sideNav' => 'add',
            'genres' => $genres,
        ]);
    }

    public function addMovie(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            // 'genre' => 'required',
            'category' => 'required',
            // 'images' => 'image|mimes:jpg,png,jpeg,webp|required',
            // 'video' => 'required|max:40000',
            'size' => 'required',
            'price' => 'required',
        ]);

        // move video to video folder in public directory

        // $newVideoName = time(). '.' . $request->video->extension();
        // $request->video->move(public_path('video'), $newVideoName);

        $product = Movie::create([
            'name' => $request->name,
            'description' => $request->description,
            'genre' => $request->category,
            'image' => 'newImageName',
            'video' => 'Video',
            'price' => $request->price,
            'popular' => 'null',
            'status' => 'null',
            'size' => $request->size
        ]);

        // move images into folder in public directory
        $count = 1;

        foreach ($request->file('images') as $image) {
            $randomNumber = rand(100000, 999999);
            $newImageName = $randomNumber.$count. '.' . $image->extension();
            $image->move(public_path('images'), $newImageName);
            
            $product->images()->create([
                'image' => $newImageName,
            ]);

            $count++;
        }

        return back()->with('message', 'Product added successfully.');



    }
}
