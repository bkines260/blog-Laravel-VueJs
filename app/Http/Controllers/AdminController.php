<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('admin');
    }
    public function getPosts(){
        $posts = Post::latest()->with('user')->with('category')->paginate(1);
        foreach($posts as $post){
            $post->setAttribute('added_at',$post->created_at->diffForHumans());
            $post->setAttribute('comments_count',$post->comments->count());
        }
        return response()->json($posts);
    }
}
