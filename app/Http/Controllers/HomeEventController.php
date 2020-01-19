<?php

namespace App\Http\Controllers;

use App\HomeEvent;
use Illuminate\Http\Request;
use App;

class HomeEventController extends Controller
{
    
    public function  index()
    {
        dd('HomeEventController@index');
    }

    public function show($id)
    {  
      //  dump('HomeEventController@show');

       App::setLocale(session('lang'));
      $home_event = HomeEvent::first();
      // dd($about);
       return view('admin.home_event.index', compact('home_event'));
    }
    
    public function edit(Request $request, $id)
    {
      
      // dump('HomeEventController@edit');

       App::setLocale(session('lang'));
    
       
       $home_event = HomeEvent::find(1);
      
        return view('admin.home_event.event_edit', compact('home_event'));
    }
    
    public function update(Request $request, $id)
        {
           // dump('HomeEventController@update');
    
            $attributes =  $request->validate([
                'image' => 'image',
                'title_en' => 'required',
                'title_ru' => 'required',
                'description_en' => 'required',
                'description_ru' => 'required',
            ]);
          
          
        
            if( request()->has('image') == true ) {
                    
                $image = $request->file('image');
                $image->move(public_path().'/images/home_event', $image->getClientOriginalName());
                
                $attributes['image'] = $image -> getClientOriginalName();
            }
        
            
           $home_event = HomeEvent::find(1);
           $home_event->update($attributes);
            
           // $about = HomeEvent::find(1);
        
            return view('admin.home_event.index', compact('home_event'));
        }
}
