@extends('layouts.master')
@section('container')
<div class="container">
    <h5><strong>Book Rent Form</h5></strong>
    @include('layouts.errors')
    <form method="POST" action="/rental_history/books">
        @csrf
        <i>* id number without dashes</i>
        <br>
        <br>
          <div class="form-group" >
            <label for="inputNameOfDevice">Book ID</label>
            <input type="number" class="form-control" id="nputNameOfDevice" name="book_id">
          </div>

          <div class="form-group" >
            <label for="inputStudentId">Student ID Number *</label>
            <input type="text" class="form-control" id="inputStudentId" name="student_id">
          </div>
          <div class="form-group" >
            <label for="inputDTborrowed">Date and Time Borrowed</label>
            <input type="datetime-local" value="2011-08-19T13:45:00" class="form-control" id="inputDTborrowed" name="datetime_borrowed">
          </div>
          <div class="form-group" >
            <label for="inputReturnDue">Return Due Date</label>
            <input type="date"  class="form-control" id="inputReturnDue" name="due_date">
          </div>
          <br><br>
        <button type="submit" class="btn btn-primary">Submit</button> 
        <a href="/rental_history/books" class="btn btn-danger">Cancel</a>
      </form>


     
</div>


    
@endsection