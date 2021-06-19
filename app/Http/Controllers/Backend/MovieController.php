<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\CensorRating;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.movie.index', ['movies' => Movie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.movie.create', ['genres' => Genre::all(), 'censorRatings' => CensorRating::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {
        try {
            Movie::create([
                'title' => request('title'),
                'starring' => request('starring'),
                'director' => request('director'),
                'censor_rating_id' => request('censor_rating_id'),
                'genre_id' => request('genre_id'),
                'synopsis' => request('synopsis'),
                'language' => request('language'),
                'duration' => request('duration'),
                'banner' => request()->file('banner')->store('img/movies'),
                'since' => request('since'),
                'trailer_link' => request('trailer_link'),
                'status' => request('status'),
            ]);

            return redirect('admin/movies')->with('success', 'Added data movie has been successfully');
        } catch (\Throwable $th) {
            return redirect('admin/movies')->with('error', $th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('backend.movie.edit', ['movie' => $movie, 'genres' => Genre::all(), 'censorRatings' => CensorRating::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        try {
            if (request('banner')) {
                Storage::delete($movie->banner);
                $banner = request()->file('banner')->store('img/movies');
            } else if ($movie->banner) {
                $banner = $movie->banner;
            } else {
                $banner = null;
            }

            $movie->update([
                'title' => request('title'),
                'starring' => request('starring'),
                'director' => request('director'),
                'censor_rating_id' => request('censor_rating_id'),
                'genre_id' => request('genre_id'),
                'synopsis' => request('synopsis'),
                'language' => request('language'),
                'duration' => request('duration'),
                'banner' => $banner,
                'since' => request('since'),
                'trailer_link' => request('trailer_link'),
                'status' => request('status'),
            ]);

            return redirect('admin/movies')->with('success', 'Updated data movie has been successfully');
        } catch (\Throwable $th) {
            return redirect('admin/movies')->with('error', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        try {
            Storage::delete($movie->banner);
            $movie->delete();

            return back()->with('success', 'Deleted data movie has been successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }
}
