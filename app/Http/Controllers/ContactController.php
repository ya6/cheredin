<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     
         $page_en ='CONTACT';
         $page_ru ='КОНТАКТЫ';
         
         $lastblogs =  App\Blog::orderBy('id', 'desc')->take(2)->get();

      //  dd($blogs);
     
         return view('Pages.contact.index', compact('page_en', 'page_ru', 'title_lang', 'desc_lang', 'lastblogs'));
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
