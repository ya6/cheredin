<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminController extends Controller
{
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
      $page_en ='';
      $page_ru ='';
      

        return view('admin.index', compact('page_en', 'page_ru'));
    }
}
