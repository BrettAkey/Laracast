<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
    public function index() {
        $posts = post::take(3)->get();
        return view('posts.index', [ 'posts' => $posts]);
    }

    public function show($post) {    
        return view('posts.post', [
            'post' => post::find($post)
        ]);
    }
}
