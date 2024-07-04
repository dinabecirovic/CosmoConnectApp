<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function addT(Request $request ){
        $this->validate($request,[
            'topic_id'=>'required',
            'file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg|max:2048',
        ]);
        $n_topic=new Material();
        $n_topic->topic_id=$request->topic_id;
        if($file=$request->file('file'))
        {
          $file->move('images',$file->getClientOriginalName());
          $file_name=$file->getClientOriginalName();
          $n_topic->file=$file_name;
        }
        $n_topic->save();
   
        return redirect('/moderator')->with('success','Materijal je uspešno postavljen.');
    }

}
