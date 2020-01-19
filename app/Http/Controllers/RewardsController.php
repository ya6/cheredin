<?php

namespace App\Http\Controllers;

use App\Reward;
use Illuminate\Http\Request;
use App;

class RewardsController extends Controller
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

       $rewards = Reward::all();

        return view('admin.reward.index', compact('rewards'));
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
         return view('admin.reward.reward_create');
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
        $image->move(public_path().'/images/rewards', $image->getClientOriginalName());
        
        $attributes['image'] = $image -> getClientOriginalName();
    }

  
    Reward::create($attributes);
    
    $rewards = Reward::all();

    return view('admin.reward.index', compact('rewards'));
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

       $reward = Reward::find($id);
      
        return view('admin.reward.reward_edit', compact('reward'));
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
           $image->move(public_path().'/images/rewards', $image->getClientOriginalName());
           
           $attributes['image'] = $image -> getClientOriginalName();
       }
   
       
       $photo = Reward::find($id);
       $photo->update($attributes);
       
       $rewards = Reward::all();
   
       return view('admin.reward.index', compact('rewards'));
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
      
       $photo = Reward::find($id);
      
       if ($id != 1) {
          $photo->delete();
       }

       $rewards = Reward::all();

       return view('admin.reward.index', compact('rewards'));
    }
}
