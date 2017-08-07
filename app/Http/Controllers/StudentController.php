<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\College;
use App\Program;
use App\Student;

class StudentController extends Controller
{
    //
    public function showStudents(){
          $object = new Student;

          $students = $object->get();
          
          return view('university/studentlist',compact('students'));
    }

    public function showStudent($studID){
         $object = new Student;

         $student = $object->findOrFail($studID);

         return view('university/studentdisplay',compact('student'));

    }    

    public function addStudent(){

          $collegeArray = [];
          $college = new College;

          $colleges = $college->get();

          foreach($colleges as $col){
              $collinfo['collegeID'] = $col->collegeid;
              $collinfo['collegeName'] = $col->collegename;
              array_push($collegeArray,$collinfo);
          }
      
          return view('university/studententry',compact('collegeArray'));
    }

    public function saveStudent(Request $request){

        $cleanInput = $this->validate($request,[
              'studNo'=>'required|numeric',
              'studFname'=>'required|alpha',
              'studLname'=>'required|alpha',
              'studYear'=>'required|numeric|max:1',
        ]);

         $student = new Student;

         $student->studentid    = $request->studNo;
         $student->studentfname = $request->studFname;
         $student->studentmname = $request->studMname;
         $student->studentlname = $request->studLname;
         $student->studentyear  = $request->studYear;
         $student->sprogramid   = $request->programs;
         $student->scollegeid   = $request->colleges;

         $student->save();
         return redirect('/student/'.$request->studNo);
    }
}
