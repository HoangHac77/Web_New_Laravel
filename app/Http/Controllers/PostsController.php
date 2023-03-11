<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $posts = Post::all();
        return view("admin.pages.post.post")->with(['posts' => $posts, 'tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.pages.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $generatedImageName = 'image' . time() . '-'
        //     . $request->name . '.'
        //     . $request->image->extension();
        // $request->image->move(public_path('images'), $generatedImageName);

        // dd($generatedImageName);

        $request->validate([
            'title' => 'required',
            'content' => 'required|min:10|max:200',
            'category_id' => 'required',
            'img_path' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        // dd($request->all());
        $generatedImageName = 'img_path' . time() . '-'
            . $request->name . '.'
            . $request->img_path->extension();
        $request->img_path->move(public_path('images'), $generatedImageName);

        $posts = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category_id'),
            'img_path' =>  $generatedImageName,
            'slug' => Str::slug($request->title),
        ]);

        $posts->tags()->attach($request->tags);
        // save database
        $posts->save();
        return redirect('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        $category = Category::find($posts->category_id);
        $posts->category = $category;

        return view('admin.pages.post.show')->with('posts', $posts);
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
        $posts = Post::find($id);
        $posts->delete();

        return redirect('/admin/post');
    }
}
