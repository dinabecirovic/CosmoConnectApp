<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Enrolled;

class ModeratorController extends Controller
{
    public function moderator()
    {
        return view('auth.moderator');
    }

    public function analysisT(){
        $datat=Topic::all();
        $datats=Enrolled::all();
        return view('auth.analysisT', ['topics'=>$datat],['enrol'=>$datats]);
    }
}
