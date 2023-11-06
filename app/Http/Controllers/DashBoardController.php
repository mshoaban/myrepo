<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Product;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashBoardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::where('publish', 0)->get();
        $total_posts = Post::all();
        $roles = Role::all();
        $permissions = Permission::all();
        $products = Product::all();
        return view('dashboard', compact('users', 'posts', 'roles', 'total_posts', 'permissions', 'products'));
    }
}
