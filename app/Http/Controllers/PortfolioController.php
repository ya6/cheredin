<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
    
    
$page_en ='PHOTO GALLERY';
$page_ru ='ФОТОГАЛЕРЕЯ';

$photos = App\Photo::all();


$rewards = App\Reward::all();

$lastblogs =  App\Blog::orderBy('id', 'desc')->take(2)->get();

        return view('Pages.portfolio.index', compact('page_en', 'page_ru', 'title_lang', 'desc_lang', 'lastblogs', 'photos', 'rewards'));

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
