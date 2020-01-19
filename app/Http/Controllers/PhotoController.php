<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

use App;

class PhotoController extends Controller
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

       $photos = Photo::all();

        return view('admin.photo.index', compact('photos'));
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
         return view('admin.photo.photo_create');
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
        $image->move(public_path().'/images/photos', $image->getClientOriginalName());
        
        $attributes['image'] = $image -> getClientOriginalName();
    }

  
    Photo::create($attributes);
    
    $photos = Photo::all();

    return view('admin.photo.index', compact('photos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
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

       $photo = Photo::find($id);
      
        return view('admin.photo.photo_edit', compact('photo'));
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
           $image->move(public_path().'/images/photos', $image->getClientOriginalName());
           
           $attributes['image'] = $image -> getClientOriginalName();
       }
   
       
       $photo = Photo::find($id);
       $photo->update($attributes);
       
       $photos = Photo::all();
   
       return view('admin.photo.index', compact('photos'));
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
      
       $photo = Photo::find($id);
      
       if ($id != 1) {
          $photo->delete();
       }

       $photos = Photo::all();

       return view('admin.photo.index', compact('photos'));
    }
}
