<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Program;
use App\College;

class CollegeController extends Controller
{
    //
    public function showCollegeInfo($collid){
        $college = new College;

        $selectedCollege = $college->find($collid);
       
        return view('university/collegedisplay',compact('selectedCollege'));
    }    
}
