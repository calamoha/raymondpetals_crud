@extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header bg-primary">Students Birthday</div>
  <div class="card-body bg-secondary">
      <!--create area----

-->
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Full Name*</label></br>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name*"required></br>
        <label>Age*</label></br>
        <input type="text" name="age" id="age" class="form-control" placeholder="Age*"required></br>
        <label>Birthday*</label></br>
        <input type="date" name="year" id="year" class="form-control" placeholder="Birthday*"required></br>
        <label>Year&Section*</label></br>
        <input type="text" name="section" id="section" class="form-control" placeholder="Section*"required></br>
        <label>Course*</label></br>
        <input type="text" name="course" id="course" class="form-control" placeholder="Course*"required></br>
        <input type="submit" value="Save" class="btn btn-success">
 
    </form>
  
  </div>
</div>
@stop