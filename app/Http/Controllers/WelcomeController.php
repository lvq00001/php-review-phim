<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
        $movies = Movie::paginate(8);
        $title = "";
        return view('welcome.home_page')->with('movies', $movies)->with('title', $title);
    }

    function policies()
    {
        return view('welcome.policy');
    }

    function intro()
    {
        $movies = Movie::paginate(8);
        $title = "";
        return view('welcome.intro');
    }
}