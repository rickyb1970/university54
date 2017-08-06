@extends('university/master')

@section('title_text')
   Programs Listing
@stop

@section('content')
        Programs:<br><br>
    	@foreach($programs as $program)
    		Program ID: {{$program->programid}}<br>
    		Program Full Name: {{$program->programname}}<br>
    		Program Short Name: {{$program->programsname}}<br>
    		College: {{$program->collegeName->collegename}}<br><br>
            <hr>
    	@endforeach   
@stop