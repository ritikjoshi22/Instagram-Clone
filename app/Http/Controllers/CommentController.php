<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        $data = $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $data['comment'],
        ]);

        return redirect("/posts/" . $post->id);
    }

    public function destroy(Comment $comment)
    {
        if (auth()-id() !== $comment->user_id && auth()->id() !== $comment->post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $postId = $comment->post_id;
        $comment->delete();

        return redirect("/posts/" , $postId);
    }
}
