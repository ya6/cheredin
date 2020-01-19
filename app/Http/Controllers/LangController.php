<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    public function  index(Request $request)
    {  
        
      $lang = $request->lang;
     // dump( $lang);

      session(['lang' => $lang]);

      return back();
    }
}
