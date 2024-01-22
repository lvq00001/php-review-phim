<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function index(string $movieId)
    {
        $movie = Movie::find($movieId);
        $stars_id = DB::table("movie_star")->where("movie_id", $movieId)->pluck('star_id')->toArray();
        $stars = [];
        for ($i = 0; $i < count($stars_id); $i++) {
            $temp = DB::table("stars")->where("id", $stars_id[$i])->pluck('name')->toArray();
            $stars[] = $temp;
        }

        $comments = Comment::where('movie_id', $movieId)->get();
        $users = [];
        foreach ($comments as $c) {
            array_push($users, User::where('id', $c->user_id)->get());
        }

        return view('movie.movie-detail')
            ->with('movie', $movie)
            ->with('stars', $stars)
            ->with('users', $users)
            ->with('comments', $comments);
    }

    public function search_movie(Request $request)
    {
        $title = $request->input('title') ?? "";
        $movies = DB::table('movies')->where('title', 'LIKE', '%' . $title . '%')->get();
        return view('welcome.home_page')
            ->with('movies', $movies)
            ->with('title', $title);
    }
}