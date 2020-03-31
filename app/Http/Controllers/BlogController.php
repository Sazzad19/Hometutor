<?php

namespace App\Http\Controllers;
use Image;
use App\Blogpost;
use App\Post_category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $post_categories=Post_category::all();
        $posts=Blogpost::paginate(2);
       $latest_posts=Blogpost::orderBy('id', 'DESC')->take(3)->get();
      

        return view('pages.blog.index')->with('post_categories',$post_categories)->with('posts',$posts)->with('latest_posts',$latest_posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function postview($id)
    {
        $post_categories=Post_category::all();
        $post=Blogpost::where('id',$id)->first();
         return view('pages.blog.postview')->with('post',$post)->with('post_categories',$post_categories);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepost(Request $request)
    {
        $blogpost=new Blogpost;
        $blogpost->name=$request->name;
         $blogpost->title=$request->title;
         $blogpost->catagory=$request->catagory;
         $blogpost->body=$request->body;
         $blogpost->user_id=$request->user_id;
         
        $blog_image=time().'.'.$request->image->getClientOriginalExtension();
        $location='images/blogpost_image/'.$blog_image;
        Image::make($request->image)->save($location);
        $blogpost->image=$blog_image;
        
 $blogpost->save();
 return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
   public function category_posts($id)
    {
      $post_categories=Post_category::all();
          $posts=Blogpost::where('category',$id)->get();
     $latest_posts=Blogpost::orderBy('id', 'DESC')->take(3)->get();

        return view('pages.blog.index')->with('post_categories',$post_categories)->with('posts',$posts)->with('latest_posts',$latest_posts);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
