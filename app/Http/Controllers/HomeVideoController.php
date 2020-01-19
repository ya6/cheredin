<?php

namespace App\Http\Controllers;

use App\HomeVideo;
use Illuminate\Http\Request;
use App;

class HomeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('HomeVideoController@index');

       App::setLocale(session('lang'));

       $home_video = Homevideo::first();
      // dd($home_video);

        return view('admin.home_video.index', compact('home_video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function show(HomeVideo $homeVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */

    public function edit(HomeVideo $homeVideo)
    {
        App::setLocale(session('lang'));
//dd(ini_get('post_max_size'));
//dd(ini_get('session.upload_progress.enabled'));
  
        $home_video = HomeVideo::find(1);
      
        return view('admin.home_video.home_video_edit', compact('home_video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
       // dd('HomeVideoController@update');
        $attributes =  $request->validate([
            'video' => 'file',
            'file' => 'max:51200', //5MB
        ]);
      
    
        if( request()->has('video') == true ) {
                
            $video = $request->file('video');
            $video->move(public_path().'/videos/home_video', $video->getClientOriginalName());
            
            $attributes['video'] = $video -> getClientOriginalName();
        }
    
        
        $video = HomeVideo::find($id);
        $video->update($attributes);
        
        $home_video = HomeVideo::find($id);
    
        return view('admin.home_video.index', compact('home_video'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeVideo $homeVideo)
    {
        //
    }
}
