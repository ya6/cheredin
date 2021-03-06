<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {   
       $search = null;
       if($request->search !=null)
       {
           $search = htmlspecialchars($request->search);
    
       }
       
       $title_lang = 'title_'.current_lacale();
       $desc_lang = 'description_'.current_lacale() ;   
       $category_lang = 'category_'.current_lacale();

    
     
         $page_en ='BLOG';
         $page_ru ='СТАТЬИ';
        
         session(['category'=>  $request->category]);

    if($request->search !=null)
    {
        $blogs = App\Blog::
        where('title_ru', 'like','%'.$search.'%')
        
        ->orwhere('title_en', 'like','%'.$search.'%')
        ->orwhere('title_ru', 'like','%'.$search.'%')
        ->orwhere('description_ru', 'like','%'.$search.'%')
        ->orwhere('description_en', 'like','%'.$search.'%')       
        
        ->orderBy('id', 'desc')->paginate(4);

    }   
    elseif($request->category == null || $request->category == 'all' )
    {
         $blogs = App\Blog::orderBy('id', 'desc')->paginate(4);
    } else
    {
        $blogs = App\Blog::where('category_id', '=', session('category'))->orderBy('id', 'desc')->paginate(4);
    }
   
      
       $lastblogs =  App\Blog::orderBy('id', 'desc')->take(2)->get();

       $categories = App\Category::all();
       
     
         return view('Pages.blog.index', compact('page_en', 'page_ru', 'title_lang',
          'category_lang', 'desc_lang', 'blogs', 'lastblogs', 'categories', 'search'));
      
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,    $id)
    {
      //  dump('BlogController@show');

        $search = null;
        if($request->search !=null)
        {
            $search = htmlspecialchars($request->search);
        // dump('searh',$request->search);
        }

       
        $title_lang = 'title_'.current_lacale();
        $desc_lang = 'description_'.current_lacale() ;   
        $category_lang = 'category_'.current_lacale();
     
         $page_en ='BLOG';
         $page_ru ='СТАТЬИ';

         
       $lastblogs =  App\Blog::orderBy('id', 'desc')->take(2)->get();

       $categories = App\Category::all();
       // dd($blogs);

       $blog = App\Blog::find($id);
     
         return view('Pages.blog.blog_single', compact('page_en', 'page_ru', 'title_lang',
          'category_lang', 'desc_lang', 'blog', 'lastblogs', 'categories', 'search'));




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
        //
    }
}
