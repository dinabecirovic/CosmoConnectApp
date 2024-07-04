<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Enrolled;
use App\Models\Test;
use App\Models\Material;
use App\Models\Question;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\Storage;
use App\Models\Follow;
use App\Models\Result;

class UserController extends Controller
{
    public function user(){
        return view('user');
    }

    public function showTopics()
    { 
      $user_id=Session()->get('login_id');
      $por="otvoren";
      $join=Enrolled::select('topic_id')->where('user_id', '=', $user_id)->get()->toArray();
      $datat=Topic::where([['activity', '=', $por]])->whereNotIn('id', $join)->get();
      return view('user',['topics'=>$datat]);
    } 

    public function Join(Request $request){
        $t=new Enrolled();
        $t->user_id=$request->user_id;
        $t->topic_id=$request->topic_id;
        $res=$t->save();
        if($res==true){
           return redirect('/user');
        }
    }

    public function myTopics(){
        $topics = Topic::all(); // Korišćenje :: umesto -> i ispravno pozivanje modela Topic
        return view('auth.my_topics')->with('topics', $topics);
    }

    public function showTs()
    {  
        $user_id=Session()->get('login_id');
        $por="otvoren";
        $join=Enrolled::select('topic_id')->where('user_id', '=', $user_id)->get()->toArray();
        $datat=Topic::where([['activity', '=', $por]])->whereIn('id',$join)->get();
        $dm=Material::all();
        $datat2 = Topic::all();
        return view('auth.my_topics')->with(['topics'=>$datat2,'material'=>$dm]);
    }

    public function download(Request $request,$file){
        return response()->download(public_path('images/'.$file));
    }

    public function Tests(){
        return view('auth.testsU');
    }

    public function TestsU(){
        $user_id=Session()->get('login_id');
        $join=Enrolled::select('topic_id')->where('user_id', '=', $user_id)->get()->toArray();
        $datax=Test::whereIn('topic_id',$join)->get();
        return view('auth.testsU',['tests'=> $datax]);
    }

    public function TestsQ(Request $request){
        $datax=Question::all()->where('test_id','=',$request->id);
        return view('auth.test_questions',['questions'=>$datax]);
    }
    public function submit_question(Request $request){

        $yes_ans=0;
        $no_ans=0;
        $data=$request->all();
        $result=array();
        for($i=1; $i<=$request->index; $i++)
        {
            if(isset($data['question'.$i]))
            {
                $question=Question::where('id', $data['question'.$i])->get()->first();
                if(strpos($question->response,$data['ans'.$i])!=="")
                {
                    $result[$data['question'.$i]]='YES';
                    $yes_ans++;
                }
                else{
                    $result[$data['question'.$i]]='NO'; 
                    $no_ans++; 
                }
            }
        }
        $datares=new Result();
        $datares->test_id=$request->test_id;
        $datares->user_id=Session()->get('login_id');
        $datares->yes_ans=$yes_ans;
        $datares->no_ans=$no_ans;
        $datares->save();
        return redirect('/analysis')->with('success','Imate '.$yes_ans.' tačnih i '.$no_ans.'netačnih odgovora na testu.');
    }

    public function analysis(){
        $result_info=Result::all();
        return view('analysis',['results'=>$result_info]);
    }

    public function follow($moderatorId)
    {
        $userId = Session::get('login_id');
        $follow = Follow::create(['user_id' => $userId, 'moderator_id' => $moderatorId]);

        if ($follow) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function showFollowedTopics()
    {
        $userId = session()->get('login_id');
        $followedModerators = Follow::where('user_id', $userId)->pluck('moderator_id');
        $topics = Topic::whereIn('user_id', $followedModerators)->get();
        $materials = Material::all();

        return view('auth.my_topics', ['topics' => $topics, 'material' => $materials]);
    }
}