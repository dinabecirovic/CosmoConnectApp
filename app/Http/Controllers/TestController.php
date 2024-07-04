<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Test;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
  public function tests(){
    return view('auth.tests');
}
    public function AddTests(Request $request){
        $test=new Test();
        $test->name=$request->name;
        $test->difficulty=$request->difficulty;
        $test->topic_id = $request->tid;
        $test->save();
        return redirect('/tests')->with('success','Uspešno ste kreirali test.');
    }
      public function showTest()
    { 
      $topics=Topic::all();
      $tests=Test::with('topics')->get();
      $result=Result::all();
      $questions=Question::all();
      return view('auth.tests',compact('topics','tests','result','questions'));
    }

    public function destroyTest(Test $test)
    {
        $test->delete();
        return redirect('tests');
    }
}
