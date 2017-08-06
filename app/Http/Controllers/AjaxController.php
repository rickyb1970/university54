<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\College;
use App\Program;

class AjaxController extends Controller
{
    //
    public function searchIfAvailable(Request $request){
        $students = new Student;

        $result = $students->find($request->search);

        if(!$result)
           return json_encode(['result'=>true]);
        else
           return json_encode(['result'=>false]);
    }

    public function getPrograms(Request $request){
        $programs = new Program;

        $result = $programs->where('pcollegeid','=',$request->collegeid)->get();
        
        return $result;
    }
    

}
