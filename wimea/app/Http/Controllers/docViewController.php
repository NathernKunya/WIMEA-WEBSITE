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
        ->where('category','Weather Data Repositories')
        ->orwhere('category','Weather Data Repositories Manual')
        ->get();

        return view('ResearchComponents.weatherdata', ['documents' => $documents]);

    }
    public function rc3(){
        $documents = DB::table('documents')
        ->where('category','Weather Station Network Density')
        ->orWhere('category','Weather Station Network Density Manual')
        ->get();

        return view('ResearchComponents.weatherstation', ['documents' => $documents]);

    }
    public function rc4(){
        $documents = DB::table('documents')
        ->where('category','Weather Information Dissemination')
        ->orWhere('category','Weather Information Dissemination Manual')
        ->get();

        return view('ResearchComponents.weatherinformation', ['documents' => $documents]);

    }
    public function rc1(){
        $documents = DB::table('documents')
        ->where('category','Numerical Weather Prediction')
        ->orWhere('category','Numerical Weather Prediction Manual')
        ->get();

        return view('ResearchComponents.numericalweather', ['documents' => $documents]);

    }

    public function newsletter(){
        $documents = DB::table('documents')
        ->where('category','Newsletter')
        ->orWhere('category','Report')
        ->get();

        return view('Downloads.newsletter', ['documents' => $documents]);

    }

    public function publication(){
        $documents = DB::table('documents')
        ->where('category','Publication')
        ->get();

        return view('Downloads.publications', ['documents' => $documents]);

    }

    public function show($doc_Id) {
        $edituser = DB::select('select * from documents where doc_Id = ?',[$doc_Id]);

        return view('Uploads.editDoc',['edituser'=>$edituser]);
        }

        // public function showmanual($doc_Id) {
        // $editmanual = DB::select('select doc_Id, name,document, date, manual from documents where doc_Id = ?',[$doc_Id]);

        // return view('Uploads.editusermanual',['editmanual'=>$editmanual]);
        // }

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
        return back()->with("success", "Document updated successfully");

    }
    else {
        return back()->with("status", "you have an error");
    }
}

// public function editmanual(Request $request,$doc_Id) {

//     if($request->hasfile("file")){
//         foreach($request->file("file") as $fileName){
//             $originalfileName = $fileName->getClientOriginalName();
//             $explode =explode(".", $originalfileName);
//             $ext = end($explode);
//             //$extension = $request->$fileName->extension();
//            //dd($ext);

//             $name = $request->input('name');
//             $manual = $request->input('manual');
//             $date = $request->input('date');

//             $newfileName =  $request->input('name')."_".$request->input('manual')."_".rand(1,10000).'.'.$ext;
//             $moved =  $fileName->move(public_path('uploads'), $newfileName);


//     DB::update('update documents set name = ?,document=?,manual=?,date=? where doc_Id = ?',[$name,$newfileName,$manual,$date,$doc_Id]);
// }
// return back()->with("success", "Document updated successfully");

// }
// else {
// return back()->with("status", "you have an error");
// }
// }


}
