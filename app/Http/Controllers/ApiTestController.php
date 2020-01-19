<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public  function index()
    { $test = Photo::find(1);
        return $test;
    }
}
