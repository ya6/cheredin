<?php

namespace App\Http\Controllers;

use App\HomeAbout;
use Illuminate\Http\Request;
use App;

class HomeAboutController extends Controller
{
    public function  index()
    {
        dd('HomeAboutController@index');
    }

    public function show($id)
    {  
      //  dump('HomeAboutController@show');

       App::setLocale(session('lang'));
       $home_about = HomeAbout::first();
      // dd($about);
       return view('admin.home_about.index', compact('home_about'));
    }
    
    public function edit(Request $request, $id)
    {
      
      //  dump('HomeAboutController@edit');

       App::setLocale(session('lang'));
    
       
        $home_about = HomeAbout::find(1);
      
        return view('admin.home_about.about_edit', compact('home_about'));
    }
    
    public function update(Request $request, $id)
        {
          //  dump('HomeAboutController@update');
    
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
        
            
            $home_about = HomeAbout::find(1);
            $home_about->update($attributes);
            
           // $about = HomeAbout::find(1);
        
            return view('admin.home_about.index', compact('home_about'));
        }
}
