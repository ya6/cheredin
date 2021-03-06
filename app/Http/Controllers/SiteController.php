<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SiteController extends Controller
{
    public function index(Request $request)
    {
    
      //  dd(current_lacale());

      $title_lang = 'title_'.current_lacale() ;
      $desc_lang = 'description_'.current_lacale();
 

      $page_en ='HOME';
      $page_ru ='ГЛАВНАЯ';

        $photos  = App\HomePhoto::all()->take(6);
        $rewards  = App\Reward::all()->take(12);

        $slides = App\HomeSlider::all();
       
        $workouts  = App\Workout::all();

        $about = App\HomeAbout::first();

        $partners = App\Partner::all();

        $takepart = App\TakePart::first();
        $home_video = App\HomeVideo::first();
        $home_event = App\HomeEvent::first();

       
       
        $lastblogs =  App\Blog::orderBy('id', 'desc')->take(2)->get();

 
       // dump($lastblogs);
       //dd($photos->count());
     // dd($slides);
      

        return view('site.index', compact('page_en', 'page_ru', 
        'photos', 'desc_lang', 'title_lang', 'rewards', 'workouts',
        'about', 'partners', 'takepart', 'lastblogs', 'slides',
        'home_video', 'home_event'
    ));
    }
}
