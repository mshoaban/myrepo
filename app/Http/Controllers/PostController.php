<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Auth;

class PostController extends Controller
{
      public function index()
    {
        $posts = Post::where('publish', 1)->latest()->get();
        return view('posts.index' , compact('posts'));
    }

     public function pendingposts()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.pending' , compact('posts'));
    }
    

      public function userprofile($id)
    {
        $user = User::find($id);
        if(!$user)
        {
            return  view('404notfound');
        }
        $posts = $user->posts;
        return view('posts.userposts' , compact('posts','user'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = Auth::id();


        $post->save();

        return redirect('/posts')->with('status', 'Your Posts is send for approval');
    }

    public function update(Request $request , string $id)
    {
        $post = Post::find($id);
        if(!$post)
        {
        return redirect('/posts/pending')->with('status', 'No Posts found');
        }
        $post->publish = 1;
        $post->update();
        return redirect('/posts/pending')->with('status', ' Post approved suxxessfully ');
    }

     public function destroy($id)
    {
        $post = Post::find($id);
        if(!$post)
        {
        return redirect('/posts/pending')->with('status', 'No Posts found');
        }
        $post->delete();
        return redirect('/posts/pending')->with('status', 'Post is Deleted');
    }

}


