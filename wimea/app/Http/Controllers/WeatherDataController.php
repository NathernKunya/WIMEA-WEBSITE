<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherDataController extends Controller
{
    //
    public function index(){
        return view("ResearchComponents.weatherdata");
    }
}
