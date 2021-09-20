<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Posts;

class PostController extends Controller
{

     public function index()
    {
        $categories=Category::where('user_id',Auth::user()->id)->get();

       return view('posts.create',['categories'=>$categories]);
    }
    
     public function home()
    {
        $post=Post::all();
       return view('home',['posts'=>$post]);
    }
    

     public function create()
    {
        return view('posts.create');
    }
   
    public function store(Request $req)
    {
     $req->validate([

         'title'=>'required',
         'description'=>'required',
         'category_id'=>'required',
     ]);
     $post=new Post();
     $post->title=$req->title;
     $post->description=$req->description;
     $post->category_id=$req->category_id;
     $post->photo=$req->photo;
     $post->user_id=Auth::user()->id;
      if($req->hasFile('avatar'))
       {
           $path=$req->avatar->store('images');
           $post->photo=$path;
       }
     $post->save();
     return redirect('Post_lists');
    }

     public function indexPost()
    {
       $post=Post::where('user_id',Auth::user()->id)->get();
       return view('posts.index',['Posts'=>$post]);
    }
     public function details($id)
    {
    $posts= Post::find($id);
       
       return view('posts.details',['Post'=>$posts]);
    }


     public function destroyPost($id)
    {
        Post::findOrFail($id)->delete();
        return redirect('Post_lists');

    }

    public function editPost($id)
    {
      $post=Post::findOrFail($id);
      $categories=Category::all();
      
       return view('posts.edit',['post'=>$post,'categories'=>$categories]);

    }
    
  

    public function updatePost(Request $req,$id)
    {

        $post=Post::findOrFail($id);
        $post->title=$req->title;
        $post->description=$req->description;
        $post->category_id=$req->category_id;
        $post->save();

        return redirect('Post_lists');
    }
}
