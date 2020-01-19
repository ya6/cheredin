<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use App;

class PartnerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd('PartnerController index');
       App::setLocale(session('lang'));

       $partners = Partner::all();

        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('PartnerController create');
         
         App::setLocale(session('lang'));
         return view('admin.partner.partner_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump('PartnerController store');

      //  dd($request);

       $attributes =  $request->validate([
        'image' => 'required | image',
        'title_en' => 'required',
        'title_ru' => 'required',
        'description_en' => 'required',
        'description_ru' => 'required',  
    ]);
  
  

    if( request()->has('image')== true ) {
            
        $image = $request->file('image');
        $image->move(public_path().'/images/partners', $image->getClientOriginalName());
        
        $attributes['image'] = $image -> getClientOriginalName();
    }

        dump($attributes);
      
    Partner::create($attributes);
   
    $partners = Partner::all();

    return view('admin.partner.index', compact('partners'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // dd('PartnerController edit');
       
       App::setLocale(session('lang'));

       $partner = Partner::find($id);
      
        return view('admin.partner.partner_edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd('PartnerController update');

       $attributes =  $request->validate([
           'image' => 'image',
           
           'title_en' => 'required',
           'title_ru' => 'required',

           'description_en' => 'required',
           'description_ru' => 'required',
       ]);
     
     
   
       if( request()->has('image') == true ) {
               
           $image = $request->file('image');
           $image->move(public_path().'/images/partners', $image->getClientOriginalName());
           
           $attributes['image'] = $image -> getClientOriginalName();
       }
   
       
       $partner = Partner::find($id);
       $partner->update($attributes);
       
       $partners = Partner::all();
   
       return view('admin.partner.index', compact('partners'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd('PartnerController delete');
      
       $partner = Partner::find($id);
      
       if ($id != 1) {
          $partner->delete();
       }

       $partners = Partner::all();

       return view('admin.partner.index', compact('partners'));
    }
}
