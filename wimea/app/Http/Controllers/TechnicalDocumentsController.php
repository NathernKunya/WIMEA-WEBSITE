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

        if($request->hasfile("file")){
            foreach($request->file("file") as $fileName){
                $request->validate([
                    'date'=>'required',
                    'name'=>'required',
                    'category'=>'required',
                    // 'file' => 'required|mimes:pdf,xlx,csv,xls,ppt, pptx, docx,txt, doc|max:2048',
                ]);
                
                $originalfileName = $fileName->getClientOriginalName();
                $explode =explode(".", $originalfileName);
                $ext = end($explode);
                //$extension = $request->$fileName->extension();
               //dd($ext);


        $newfileName =  $request->name."_".$request->category."_".rand(1,10000).'.'.$ext;
       // dd($newfileName);
        
        $moved =  $fileName->move(public_path('uploads'), $newfileName);
        //$file->move(public_path() . '/mytestfile/', $name);
        if($moved){
            $inserted = DB::insert('insert into documents (name, date, category ,document) 
            values (?, ?,?,?)', [$request->name , $request->date, $request->category , $newfileName]);
            if($inserted){
                     return back()->with('success','You have successfully upload file.');
        
            }
                else{
            return back()->with('error','file to upload file.');
        } 
   
        }


            }

        }
        
   

   
   
    }

}
