<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dump('CategoriesController@index');

        App::setLocale(session('lang'));

        $categories = App\Category::all();
        //dd( $categories);
 
         return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // dd('slider create');
         App::setLocale(session('lang'));
         return view('admin.category.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dump('#category store');
        // dump($request);

        $attributes =  $request->validate([
           
            'category_en' => 'required',
            'category_ru' => 'required',  
        ]);
      
    
     
    
        category::create($attributes);
       
        $categories = category::all();
    
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  dump('#category edit');

        App::setLocale(session('lang'));

        // dump($id);
         $category = category::find($id);
        // dump($slide);
 
         return view('admin.category.category_edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dump('#category update');
        // dump($request);
        // dd($id);

        $attributes =  $request->validate([
           
            'category_en' => 'required',
            'category_ru' => 'required',  
        ]);
      
      
        
        $category = category::find($id);
        $category->update($attributes);
        
        $categories = category::all();
    
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dump('#category del');
        $category = category::find($id);
    dump($category->blogs->count());
    
       
        if ($category->blogs->count() > 0) {

            $categories = category::all();

            $messages =[0 => 'У катерогии есть '.$category->blogs->count().' блога'];
            return view('admin.category.index', compact('categories', 'messages'));
        }

        $category->delete();
        $categories = category::all();

        return view('admin.category.index', compact('categories'));
    }
}
