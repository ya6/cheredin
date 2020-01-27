<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;
use App;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dump('#workout@index');

        App::setLocale(session('lang'));

        $workouts = App\Workout::all();
        //dd( $workouts);
 
         return view('admin.workout.index', compact('workouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // dd('slider create');
         App::setLocale(session('lang'));
         return view('admin.workout.workout_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      //  dump('#workout store');
      //  dump($request);


        $attributes =  $request->validate([
            'image' => 'required | image',
            'title_en' => 'required',
            'title_ru' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',  
        ]);
      
    
        if( request()->has('image')== true ) {
                
            $image = $request->file('image');
            $image->move(public_path().'/images/workout', $image->getClientOriginalName());
            
            $attributes['image'] = $image -> getClientOriginalName();
        }
    
        // dd($attributes);
        Workout::create($attributes);
        //dd($attributes);
        $workouts = Workout::all();
    
        return view('admin.workout.index', compact('workouts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dump('#workout edit');

        App::setLocale(session('lang'));

        // dump($id);
         $workout = Workout::find($id);
        // dump($slide);
 
         return view('admin.workout.workout_edit', compact('workout'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dump('#workout update');
        // dump($request);
        // dd($id);

        $attributes =  $request->validate([
            'image' => 'image',
            'title_en' => 'required',
            'title_ru' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
        ]);
      
      
    
        if( request()->has('image') == true ) {
                
            $image = $request->file('image');
            $image->move(public_path().'/images/workout', $image->getClientOriginalName());
            
            $attributes['image'] = $image -> getClientOriginalName();
        }
    
        
        $workout = Workout::find($id);
        $workout->update($attributes);
        
        $workouts = Workout::all();
    
        return view('admin.workout.index', compact('workouts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dump('#workout del');
        $workout = Workout::find($id);
       
        if ($id != 1) {
           $workout->delete();
        }

        $workouts = Workout::all();

        return view('admin.workout.index', compact('workouts'));
    }
}
