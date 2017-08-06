@extends('university/master')

@section('title_text')
   Display Program Information 
@stop

@section('content')
         Program Information:<br><br>
         Program ID: {{$program->programid}}<br>
         Program Name: {{$program->programname}}<br>
         Program Shortname: {{$program->programsname}}<br>
         College Name: {{$program->collegeName->collegename}}<br>
@stop