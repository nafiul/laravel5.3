<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    public function store(BlogRequest $request)
    {
        $request['published_at']=\Carbon\carbon::now();
        Blog::create($request->all());
        return redirect('blogs');
    }
    public function create()
    {
        return view('blog.create');
    }
    public function index()
    {
        $blogs=Blog::all();
        return view('blog.index',compact('blogs'));
    }
    public function show($id)
    {
        $blog=Blog::findOrFail($id);
        return view('blog.show',compact('blog'));
    }
    public function edit($id)
    {
        $blog=Blog::findOrFail($id);
        return view('blog.edit',compact('blog'));
    }
    public function update($id,BlogRequest $request)
    {
        $blog= Blog::findOrFail($id);
        $request['published_at']=\Carbon\carbon::now();
        $blog->update($request->all());
        return redirect('blogs');
    }
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('blogs');
    }
}
