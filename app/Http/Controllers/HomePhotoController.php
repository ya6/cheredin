<?php

namespace App\Http\Controllers;

use App\HomePhoto;
use Illuminate\Http\Request;
use App;

class HomePhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd('photoController index');
       App::setLocale(session('lang'));

       $photos = HomePhoto::all();

        return view('admin.home_photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('photoController create');
         
         App::setLocale(session('lang'));
         return view('admin.home_photo.photo_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd('photoController store');
       $attributes =  $request->validate([
        'image' => 'required | image',

        'description_en' => 'required',
        'description_ru' => 'required',  
    ]);
  

    if( request()->has('image')== true ) {
            
        $image = $request->file('image');
        $image->move(public_path().'/images/home_photos', $image->getClientOriginalName());
        
        $attributes['image'] = $image -> getClientOriginalName();
    }

  
    HomePhoto::create($attributes);
    
    $photos = HomePhoto::all();

    return view('admin.home_photo.index', compact('photos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(HomePhoto $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // dd('photoController edit');
       
       App::setLocale(session('lang'));

       $photo = HomePhoto::find($id);
      
        return view('admin.home_photo.photo_edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd('photoController update');

       $attributes =  $request->validate([
           'image' => 'image',

           'description_en' => 'required',
           'description_ru' => 'required',
       ]);
     
     
   
       if( request()->has('image') == true ) {
               
           $image = $request->file('image');
           $image->move(public_path().'/images/home_photos', $image->getClientOriginalName());
           
           $attributes['image'] = $image -> getClientOriginalName();
       }
   
       
       $photo = HomePhoto::find($id);
       $photo->update($attributes);
       
       $photos = HomePhoto::all();
   
       return view('admin.home_photo.index', compact('photos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd('photoController delete');
      
       $photo = HomePhoto::find($id);
      
       if ($id != 1) {
          $photo->delete();
       }

       $photos = HomePhoto::all();

       return view('admin.home_photo.index', compact('photos'));
    }
}
