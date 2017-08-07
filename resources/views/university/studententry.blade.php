@extends('university/master')

@section('title_text')
   Add New Student Entry
@stop

@section('content')
   <ul>
   @foreach($errors->all() as $error)
       <li> {{ $error }} </li>
   @endforeach
   </ul>
   <form action="{{ url('students/insert') }}" method="post">
       {{ csrf_field() }}
       <label for="">Student No: </label><br>
       <input class="entrytext" type="text" id="studentNo" name="studNo" value=""><br>
       <label for="">First Name: </label><br>
       <input class="entrytext" type="text" name="studFname" value=""><br>
       <label for="">Middle Name: </label><br>              
       <input class="entrytext" type="text" name="studMname" value=""><br>
       <label for="">Last Name: </label><br>       
       <input class="entrytext" type="text" name="studLname" value=""><br>
       <label for="">College: </label><br>      
       <select name="colleges" id="colleges">
           <option selected>--- Please select a college ---</selected>
           @foreach($collegeArray as $college)
              <option value="{{ $college['collegeID'] }}">{{ $college['collegeName'] }}</option>
           @endforeach   
       </select><br>
       <label for="">Program: </label><br>
       <select name="programs" id="programs" disabled>
           
       </select><br>       
       <label for="">Year: </label><br>       
       <input class="entrytext" type="text" name="studYear" value=""><br>
       <br> 
       <button class="btn btn-primary" type="submit">Submit</button>
       <button class="btn btn-danger" type="reset">Clear</button>
   </form>
@stop