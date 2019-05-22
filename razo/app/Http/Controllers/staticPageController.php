<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticPageController extends Controller
{
    public function about()
    {
        $random = rand(1,10);
        if($random == 10)
        {
            return view('about',['surprise' => true]);
        }
        return view('about');
    }

    public function autres()
    {
        return redirect()->route('contact');
    }

    public function showAll()
    {
        $post = Post::all();
        return view('posts.index', ['posts' => $post]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['posts' => $post]);
    }

}
