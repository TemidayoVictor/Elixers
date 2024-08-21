<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Image;

use Illuminate\Support\Facades\File;

class EditMovieController extends Controller
{
    //
    public function index($id) {
        $movie = Movie::find($id);
        $genres = Genre::all();
        $images = Image::where('movie_id', $id)->get();
        return view('admin.edit-movie', [
            'upperNav' => 'nil',
            'sideNav' => 'add',
            'movie' => $movie,
            'genres' => $genres,
            'images' => $images
        ]);
    }

    public function editMovie(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            // 'image' => 'image|mimes:jpg,png,jpeg,webp',
            // 'video' => 'max:40000',
            'size' => 'required',
            'price' => 'required',
            'initialImage',
            // 'initialVideo',
        ]);

        // move image into Images folder in public directory

        if(!empty($request->file('images'))) {
            $count = 1;

            foreach ($request->file('images') as $image) {
                $randomNumber = rand(100000, 999999);
                $newImageName = randomNumber().$count. '.' . $image->extension();
                $image->move(public_path('images'), $newImageName);
                
                Image::create([
                    'movie_id' => $id,
                    'image' => $newImageName,
                ]);

                $count++;
            }
        }

        // move video to video folder in public directory

        // if(empty($request->video)) {
        //     $newVideoName = $request->initialVideo;
        // }

        // else {
        //     File::delete(public_path('video/'.$request->initialVideo));
        //     $newVideoName = time(). '.' . $request->video->extension();
        //     $request->video->move(public_path('video'), $newVideoName);
        // }

        $update = Movie::where('id', $id)
        ->update([
            'name' => $request->name,
            'description' => $request->description,
            'genre' => $request->category,
            // 'image' => $newImageName,
            // 'video' => $newVideoName,
            'price' => $request->price,
            'size' => $request->size,
        ]);

        return back()->with('message', 'Product updated successfully.');

    }

    public function deleteImage(Request $request, $id) {
        $image = Image::find($id);
        $image->delete();
        File::delete(public_path('images/'.$image));
        return back()->with('message', 'Image Deleted Successfully');
    }
}
