<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App;
use App\Category;

class AdminBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dump ('AdminBlogsController@index');

        $search = null;
       if($request->search !=null)
       {
           $search = htmlspecialchars($request->search);
    
       }
       
       $title_lang = 'title_'.current_lacale();
       $desc_lang = 'description_'.current_lacale() ;   
       $category_lang = 'category_'.current_lacale();
       
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
   
      

       $categories = App\Category::all();
       
     
         return view('admin.blog.index', compact('title_lang',
          'category_lang', 'desc_lang', 'blogs',  'categories', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        App::setLocale(session('lang'));
        $categories = Category::all();
        $category_lang = 'category_'.current_lacale();
        return view('admin.blog.blog_create', compact('categories', 'category_lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump ('AdminBlogsController@store');
        dd($request);
        $attributes =  $request->validate([
            'image' => 'image',
            'title_en' => 'required',
            'title_ru' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',  
        ]);

        if( request()->has('image')== true ) {
                
            $image = $request->file('image');
            $image->move(public_path().'/images/blogs', $image->getClientOriginalName());
            
            $attributes['image'] = $image -> getClientOriginalName();
        }

        Blog::create($attributes);
        
       // $blogs = Blog::all();
    
       // return view('admin.blog.index', compact('workouts'));
       return redirect('admin/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
