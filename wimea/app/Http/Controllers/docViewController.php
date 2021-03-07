<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class docViewController extends Controller
{
    //
    public function index(){
        $documents = DB::table('documents')
        ->where('category','rc2')
        ->get();

        return view('ResearchComponents.weatherdata', ['documents' => $documents]);

    }
    public function rc3(){
        $documents = DB::table('documents')
        ->where('category','rc3')
        ->get();

        return view('ResearchComponents.weatherstation', ['documents' => $documents]);

    }
    public function rc4(){
        $documents = DB::table('documents')
        ->where('category','rc4')
        ->get();

        return view('ResearchComponents.weatherinformation', ['documents' => $documents]);

    }
    public function rc1(){
        $documents = DB::table('documents')
        ->where('category','rc1')
        ->get();

        return view('ResearchComponents.numericalweather', ['documents' => $documents]);

    }
}
