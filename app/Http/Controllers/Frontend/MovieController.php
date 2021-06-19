<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nowPlayings = Movie::where('status', 'Now Playing')->get();
        $comingSoons = Movie::where('status', 'Coming Soon')->get();
        
        return view('frontend.movies.index', compact('nowPlayings', 'comingSoons'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('frontend.movies.show');
    }
}
