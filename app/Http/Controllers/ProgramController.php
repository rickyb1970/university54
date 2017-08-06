<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\College;
use App\Program;

class ProgramController extends Controller
{
    //
    public function showProgram($id){
         $object = new Program;

         $program = $object->findOrFail($id);
  
         return view('university/programdisplay', compact('program'));	          
    }

    public function showPrograms(){
    	$object = new Program;

    	$programs = $object->get();

        return view('university/programlist',compact('programs')); 
    }    
}
