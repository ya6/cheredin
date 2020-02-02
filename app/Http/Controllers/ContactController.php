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
        $title_lang = 'title_'.current_lacale();
        $desc_lang = 'description_'.current_lacale();
        $address_lang = 'address_'.current_lacale() ;
     
         $page_en ='CONTACT';
         $page_ru ='КОНТАКТЫ';
         
         $lastblogs =  App\Blog::orderBy('id', 'desc')->take(2)->get();

      //  dd($blogs);

      $contact = Contact::first();

     
     // dd($contact);
     
         return view('Pages.contact.index', compact('page_en', 'page_ru', 'title_lang',
         'desc_lang', 'lastblogs', 'contact', 'address_lang'));
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
       // dd('ContactController@show');
       
       App::setLocale(session('lang'));
        $contact = App\Contact::first();

        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        // dd('ContactController@edit');

        return view('admin.contact.contact_edit', compact('contact'));
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
       // dd($request);
        $attributes =  $request->validate([
           
            'phone' => 'required',
            'email' => 'required|email',
            'address_en' => 'required',
            'address_ru' => 'required',
        ]);
      
      
    
       
        $contact->update($attributes);
        
      
    
        return redirect('/admin/contact/1');
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
