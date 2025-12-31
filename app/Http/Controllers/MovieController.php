<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Screening;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index(): View
    {
        $movies = Movie::with([
            'label:id,title',
            'screenings',
            'tags'
        ])->get();
//        dd($movie);
        $screenings = Screening::with([
            'hall:id,title',
            'type:id,title'
        ])->get();
        return view('home')->with(['movies' => $movies, 'screenings' => $screenings]);

    }
}
