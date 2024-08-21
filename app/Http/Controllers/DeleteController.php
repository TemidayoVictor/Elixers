<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Image;

use Illuminate\Support\Facades\File;

class DeleteController extends Controller
{
    //
    public function deleteMovie($id) {
        $movie = Movie::find($id);
        $images = Image::where('movie_id', $id)->get();
        if($movie) {
            foreach($images as $image) {
                File::delete(public_path('images/'.$image));
            }
            $movie->delete();
            return back()->with('message', 'Product Deleted Successfully');
        }

        else {
            return redirect()->route('home'); 
        }

    }
}
