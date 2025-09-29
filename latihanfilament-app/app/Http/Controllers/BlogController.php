<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs=Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255', 
            'description'=>'required',
            'total_view'=> 'required|max:11',
            'category'=> 'required|max:255'
        ]);

        Blog::create($request->all());
        return redirect()->route('blogs.index')
        ->with('succes', 'blog created successfully!');
    }

    public function show($id)
    {
    $blog = Blog::findOrFail($id);
    return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog=Blog::findOrfail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'title'=>'required|max:255', 
            'description'=>'required',
            'total_view'=> 'required|max:11',
            'category'=> 'required|max:255'
        ]);
        $blog=Blog::findOrfail($id);
        $blog->update($request->all());
        return redirect()->route('blogs.index')
        ->with('succes', 'blog updated successfully!');
    }

    public function destroy($id) 
    {
        $blog=Blog::findOrfail($id);
        $blog->delete();
        return redirect()->route('blogs.index')
        ->with('succes', 'blog delete successfully!');
    }
        
}
