<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class docViewController extends Controller
{
    //
    public function index(){
        $documents = DB::table('documents')->get();

        return view('ResearchComponents.weatherdata', ['documents' => $documents]);

    }
}
