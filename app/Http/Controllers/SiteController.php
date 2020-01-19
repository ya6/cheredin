<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SiteController extends Controller
{
    public function index(Request $request)
    {
//dd(session('lang'));
    if((session('lang')) != null)
     {
         
        App::setLocale(session('lang'));

        $title_lang = 'title_'.session('lang') ;
        $desc_lang = 'description_'.session('lang');
    } else {
        $title_lang = 'title_en' ;
        $desc_lang = 'description_en';
}
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
