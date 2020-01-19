<?php

namespace App\Http\Controllers;

use App\TakePart;
use Illuminate\Http\Request;
use App;

class TakePartController extends Controller
{
    public function  index()
    {
       // dd('TakePartController@index');
    }

    public function show($id)
    {  
      //  dump('TakePartController@show');

       App::setLocale(session('lang'));
       $takepart = TakePart::first();
      // dd($about);
       return view('admin.takepart.index', compact('takepart'));
    }
    
    public function edit(Request $request, $id)
    {
      
      //  dump('TakePartController@edit');

       App::setLocale(session('lang'));
    
       
        $takepart = TakePart::find(1);
      
        return view('admin.takepart.takepart_edit', compact('takepart'));
    }
    
    public function update(Request $request, $id)
        {
          //  dump('TakePartController@update');
    
            $attributes =  $request->validate([
                'image' => 'image',
                'title_en' => 'required',
                'title_ru' => 'required',
                'description_en' => 'required',
                'description_ru' => 'required',
            ]);
          
          
        
            if( request()->has('image') == true ) {
                    
                $image = $request->file('image');
                $image->move(public_path().'/images/takepart', $image->getClientOriginalName());
                
                $attributes['image'] = $image -> getClientOriginalName();
            }
        
            
            $takepart = TakePart::find(1);
            $takepart->update($attributes);
            
           // $about = TakePart::find(1);
        
            return view('admin.takepart.index', compact('takepart'));
        }
}
