<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class PostController extends Controller
{
      public function index()
    {
        $posts = Post::all();
        return view('posts.index' , compact('posts'));
    }
      public function userprofile($id)
    {
        $user = User::find($id);
        $posts = $user->posts;
        return view('posts.userposts' , compact('posts','user'));
    }

}
