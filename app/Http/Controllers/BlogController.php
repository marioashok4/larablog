<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\Blogs\CreateBlogRequest;
use App\Http\Requests\Blogs\UpdateBlogRequest;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $request)
    {
        Blog::create([

            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        session()->flash('success','Blog added successfully');

        return redirect(route('blogs.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.create',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        session()->flash('success','Blog updated successfully');

        return redirect(route('blogs.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        session()->flash('success','Blog trashed successfully');

        return redirect(route('blogs.index'));
        
    }

    public function trashed()
    {
        $trashedBlogs = Blog::onlyTrashed()->get();

        return view('blogs.trash',compact('trashedBlogs'));
    }

    public function restore($id)
    {
        $restoreBlog =Blog::onlyTrashed()->findOrFail($id);

        $restoreBlog->restore($restoreBlog);

         session()->flash('success','Blog restored successfully');

        return redirect(route('blogs.index'));

    }

    public function delete($id)
    {
        $permanentDeleteBlog= Blog::onlyTrashed()->findOrFail($id);

        $permanentDeleteBlog->forceDelete($permanentDeleteBlog);

         session()->flash('success','Blog permanently deleted successfully');

        return redirect(route('blogs.index'));


    }
}
