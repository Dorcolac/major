<?php

namespace App\Http\Controllers;

use App\Area;
use App\Category;
use App\Post;
use App\PostReply;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with(['posts' => $posts]);
    }

    public function my_index()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('posts.index')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $options = array_pluck($areas, 'name', 'id');
        $cat = Category::all();
        $categories = array_pluck($cat, 'name', 'id');

        return view('posts.create')->with(['options' => $options, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $post = Post::create($request->all());
        //dd($post);
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $replies = PostReply::with(['user'])->where('post_id', $id)->orderBy('created_at', 'DESC')->get();

        $selected_reply =  PostReply::with(['user'])->where('post_id', $id)->where('is_choosen', 1)->first();
        return view('posts.single')->with(['post' => $post, 'replies' => $replies, 'selected_reply' => $selected_reply]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('/my_posts');
    }
}
