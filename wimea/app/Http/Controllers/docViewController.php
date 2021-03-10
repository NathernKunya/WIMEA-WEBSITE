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

    public function show($doc_Id) {
        $edituser = DB::select('select * from documents where doc_Id = ?',[$doc_Id]);

        return view('Uploads.editDoc',['edituser'=>$edituser]);
        }

        public function editdocument(Request $request,$doc_Id) {

            if($request->hasfile("file")){
                foreach($request->file("file") as $fileName){
                    $originalfileName = $fileName->getClientOriginalName();
                    $explode =explode(".", $originalfileName);
                    $ext = end($explode);
                    //$extension = $request->$fileName->extension();
                   //dd($ext);

                    $name = $request->input('name');
                    $category = $request->input('category');
                    $date = $request->input('date');

                    $newfileName =  $request->input('name')."_".$request->input('category')."_".rand(1,10000).'.'.$ext;
                    $moved =  $fileName->move(public_path('uploads'), $newfileName);


            DB::update('update documents set name = ?,document=?,category=?,date=? where doc_Id = ?',[$name,$newfileName,$category,$date,$doc_Id]);
        }
        return back()->with("success", "files uploaded successfully");

    }
    else {
        return back()->with("status", "you have an error");
    }
}

}
