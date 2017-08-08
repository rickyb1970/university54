@extends('university/master')

@section('title_text')
   Add New Student Entry
@stop

@section('content')
   <form action="{{ url('students/insert') }}" method="post">
       {{ csrf_field() }}
       <label for="">Student No: </label><br>
       <input class="entrytext" type="text" id="studentNo" name="studNo" value="">
       <span id="numerror">
            @foreach($errors->get('studentNo') as $message)
                {{ $message }}
            @endforeach        
       </span><br>
       <label for="">First Name: </label><br>
       <input class="entrytext" type="text" name="studFname" value=""><span id="fnameerror"></span><br>
       <label for="">Middle Name: </label><br>              
       <input class="entrytext" type="text" name="studMname" value=""><span id="mnameerror"></span><br>
       <label for="">Last Name: </label><br>       
       <input class="entrytext" type="text" name="studLname" value=""><span id="lnameerror"></span><br>
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
       <input class="entrytext" type="text" name="studYear" value=""><span id="yearerror"></span><br>
       <br> 
       <button class="btn btn-primary" type="submit">Submit</button>
       <button class="btn btn-danger" type="reset">Clear</button>
   </form>
@stop