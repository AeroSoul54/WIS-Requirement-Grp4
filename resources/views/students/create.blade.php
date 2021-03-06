@extends('layouts.master')
@section('container')
<div class="container">
    <h5>Create Student Form</h5>
    <form method="POST" action="/students">
        @csrf
        
        <div class="form-group" >
            <label for="inputIDofStudent">Student ID</label>
            <input type="number" class="form-control" id="inputIDofStudent" name="id_number">
          </div>
          <div class="form-group" >
            <label for="inputFirstNameOfStudent">First Name</label>
            <input type="text" class="form-control" id="inputFirstNameOfStudent" name="first_name">
          </div>
          <div class="form-group" >
            <label for="inputLastNameOfStudent">Last Name</label>
            <input type="text" class="form-control" id="inputLastNameOfStudent" name="last_name">
          </div>
          <div class="form-group" >
            <label for="inputCollegeDepartmentOfStudent">College Department</label>
            <input type="text"  class="form-control" id="inputCollegeDepartmentOfStudent" name="college_department">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/students" class="btn btn-danger">Cancel</a>
      </form> 
</div>
    
@endsection