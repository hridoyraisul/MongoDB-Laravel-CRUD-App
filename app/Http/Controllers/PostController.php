<?php

namespace App\Http\Controllers;
use SweetAlert;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost()
    {
        return view('addpost');
    }
    public function storePost(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        // SweetAlert::message('Post Added Successfully!');
        return redirect()->back();
    }
    public function editPost($title)
    {
        $post = Post::where('title',$title)->first();
        return view('editpost',compact('post'));
    }
    public function updatePost(Request $request,$title)
    {
        $post = Post::where('title',$title)->first();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        // SweetAlert::message('Post Updated Successfully!');
        return redirect()->back();
    }
    public function deletePost($title)
    {
        $post = Post::where('title',$title)->first();
        $post->delete();
        // SweetAlert::message('Post Deleted');
        return redirect()->back();
    }

}
