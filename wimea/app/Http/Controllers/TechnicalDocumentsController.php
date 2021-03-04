<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TechnicalDocumentsController extends Controller
{
    //
    public function index(){
        return view("Uploads.technicaldocuments");
    }
    public function upload(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'name'=>'required',
            'category'=>'required',
            'file' => 'required|mimes:pdf,xlx,csv,xls,ppt, pptx, docx,txt|max:2048',
        ]);
        //dd($request);
          $newfileName =  $request->name."_".$request->category."_".rand(1,10000);
        $fileName = $newfileName.'.'.$request->file->extension();  
   
        $moved = $request->file->move(public_path('uploads'), $fileName);
        if($moved){
            $inserted = DB::insert('insert into documents (name, date, category ,document) 
            values (?, ?,?,?)', [$request->name , $request->date, $request->category , $fileName]);
            if($inserted){
                     return back()->with('success','You have successfully upload file.');
        

            }
        }
        else{
            return back()->with('error','file to upload file.');
        } 
   

   
   
    }
    // public function upload(Request $request){
    //     dd($request->file);
    // }
}
