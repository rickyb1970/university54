@extends('university/master')

@section('title_text')
    Display College Information
@stop

@section('content')
        College ID: {{ $selectedCollege->collegeid }}<br>
        College Name: <b>{{ $selectedCollege->collegename }}</b><br>
        College Programs:<br><br>
         
        @foreach($selectedCollege->programs as $program)
            Program: {{ $program->programid }} <b>{{ $program->programname }}</b><br>
        @endforeach 
@stop