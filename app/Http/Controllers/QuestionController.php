<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function createQ(Request $request)
    {
        $request->validate([
            'question'=>'required',
            'response'=>'required',
            't_id'=>'required',
         ]);

        $qu= new Question();
        $qu->question=$request->question;
        $qu->response=$request->response;
        $qu->t_id=$request->t_id;
        $res=$qu->save();
        if($res==true){
           return redirect('tests')->with('success','Pitanje je uspešno kreirano.');
        }
    }
    public function destroy(Question $question)
    {
        //
    }
}
