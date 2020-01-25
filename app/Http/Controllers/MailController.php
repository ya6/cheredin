<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Lang;
class MailController extends Controller
{

    public function index()
    {
        dd('MailController@index');
        $name = 'Test-Mail';
        Mail::to('aviti_m@mail.ru')->send(new SendMailable($name));
        
        return 'Email was sent';
    }


    public function mail(Request $request)
    {//dd($request);
        
        $attributes =  $request->validate([
            'name' => 'required' ,
            'email' => 'required',
            'message' => 'required',
             
        ]);
        
        Mail::to('aviti_m@mail.ru')->send(new SendMailable($attributes['name'], $attributes['email'], $attributes['message']));
        session()->flash('message',Lang::get('Message send successfully'));
        return back();
    }
}
