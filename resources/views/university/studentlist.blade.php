@extends('university/master')

@section('title_text')
  Students Listing
@stop

@section('content')
      @foreach($students as $student)
          Student ID: {{ $student->studentid }}<br>
          First Name: {{ $student->studentfname }}<br>
          Last Name: {{ $student->studentlname }}<br>
          Year: {{ $student->studentyear }}<br>
          Program: {{ $student->sProgram->programname }}<br>
          College: {{ $student->sCollege->collegename }}<br>
          =============================<br> 
      @endforeach
@stop          