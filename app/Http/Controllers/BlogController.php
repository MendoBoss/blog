<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request, Post $post){
        $request->validate([
        'content' => 'required',
        ]);
        $comment = new Comment([
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);
        $post->comments()->save($comment);

        return redirect()->route('showOne', $post->id)
        ->with('success', 'Commentaire ajouté avec succès.');
           
    }
    public function show(){
        $posts=Post::all();
        // dd($posts);
        return view('blog.show',compact('posts'));
    }
    public function showOne($id){
        $post=Post::find($id);
        // dd($posts);
        return view('blog.showOne',compact('post'));
    }
    public function create(){
        return view('blog.createPost');
    }
}
