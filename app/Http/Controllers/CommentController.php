<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MoviesController;

class CommentController extends Controller
{
    public function store_comment(Request $request)
    {
        $request->validate([
            'description' => 'required|string'
        ], [
            'description' => 'Bình luận đang trống.',
        ]);
        //$string = htmlentities($request->input('description'), ENT_COMPAT, 'UTF-8');
        Comment::create([
            'user_id' => Auth::user()->id,
            'movie_id' => intval($request->input('movie_id')),
            'description' => $request->input('description'),
        ]);

        // flash('Bình luận đã được gửi!')->success();
        // flash('Bình luận đang trống.')->error();

        return redirect()->action([MoviesController::class, 'index'], ['id' => $request->input('movie_id')]);
    }

    public function update_comment(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'description' => 'required|string'
        ], [
            'description' => 'Bình luận không được bỏ trống.',
        ]);

        $comment = Comment::find($request->input('comment_id'));
        $comment->description = $request->input('description');
        $comment->save();

        return redirect()->action([MoviesController::class, 'index'], ['id' => $request->input('movie_id')]);
    }

    public function delete_comment(Request $request)
    {
        //dd($request->all());
        $comment = Comment::find($request->input('comment_id'));
        $comment->delete();

        return redirect()->action([MoviesController::class, 'index'], ['id' => $request->input('movie_id')]);
    } 
}