<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\About;

class AboutController extends Controller
{
   public function index()
   {
      if((session('lang')) != null)
      {
          
         App::setLocale(session('lang'));
 
         $title_lang = 'title_'.session('lang') ;
         $desc_lang = 'description_'.session('lang');
     } else {
         $title_lang = 'title_en' ;
         $desc_lang = 'description_en';
     }
    $page_en ='About me';
    $page_ru ='Обо мне';

    $about = App\About::first();
    $lastblogs =  App\Blog::orderBy('id', 'desc')->take(2)->get();

    return view('Pages.about.index', compact('page_en', 'page_ru', 'desc_lang', 'title_lang','about','lastblogs'));
   }

public function show($id)
{ // dump('AboutController@show');

   App::setLocale(session('lang'));
   $about = About::first();
  // dd($about);
   return view('admin.about.index', compact('about'));
}

public function edit(Request $request, $id)
{
 // dump('AboutController@edit');
   App::setLocale(session('lang'));

   
    $about = About::find(1);
  
    return view('admin.about.about_edit', compact('about'));
}

public function update(Request $request, $id)
    {
      //  dump('AboutController@update');
        $attributes =  $request->validate([
            'image' => 'image',
            'title_en' => 'required',
            'title_ru' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
        ]);
      
      
    
        if( request()->has('image') == true ) {
                
            $image = $request->file('image');
            $image->move(public_path().'/images/about', $image->getClientOriginalName());
            
            $attributes['image'] = $image -> getClientOriginalName();
        }
    
        
        $about = About::find(1);
        $about->update($attributes);
        
      
    
        return view('admin.about.index', compact('about'));
    }

}
