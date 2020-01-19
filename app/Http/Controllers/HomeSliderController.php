<?php

namespace App\Http\Controllers;

use App\HomeSlider;
use Illuminate\Http\Request;
use App;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd('slides');
       App::setLocale(session('lang'));

       $slides = HomeSlider::all();

        return view('admin.slider.index', compact('slides'));
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
        return view('admin.slider.slider_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
      $attributes =  $request->validate([
        'image' => 'required | image',
        
    ]);
  

    if( request()->has('image')== true ) {
            
        $image = $request->file('image');
        $image->move(public_path().'/images/slider', $image->getClientOriginalName());
        
        $attributes['image'] = $image -> getClientOriginalName();
    }

    // dd($attributes);
    HomeSlider::create($attributes);
    //dd($attributes);
    $slides = HomeSlider::all();

    return view('admin.slider.index', compact('slides'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        App::setLocale(session('lang'));

       // dump($id);
        $slide = HomeSlider::find($id);
       // dump($slide);

        return view('admin.slider.slider_edit', compact('slide'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dump('#slide update');
        // dump($request);
        // dd($id);

        
      $attributes =  $request->validate([
        'image' => 'image',
        
    ]);
  

    if( request()->has('image') == true ) {
            
        $image = $request->file('image');
        $image->move(public_path().'/images/slider', $image->getClientOriginalName());
        
        $attributes['image'] = $image -> getClientOriginalName();
    }

    
    $slide = HomeSlider::find($id);
    $slide->update($attributes);
    
    $slides = HomeSlider::all();

    return view('admin.slider.index', compact('slides'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = HomeSlider::find($id);
       
        if ($id != 1) {
           $slide->delete();
        }

        $slides = HomeSlider::all();

        return view('admin.slider.index', compact('slides'));
    }
}
