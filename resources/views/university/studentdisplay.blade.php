@extends('university/master')

@section('title_text')
   Display Student Information
@stop

@section('content')
             Student ID: {{ $student->studentid }}<br>
             First Name: {{ $student->studentfname}}<br>
             Last Name: {{ $student->studentlname }}<br>
             Year: {{$student->studentyear }}<br>
             Program: {{ $student->sProgram->programname }}<br>
             College: {{ $student->sCollege->collegename }}<br>
             <hr>   
@stop