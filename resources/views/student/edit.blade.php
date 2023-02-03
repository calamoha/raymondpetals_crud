@extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header bg-primary">Edit Student Info</div>
  <div class="card-body bg-secondary">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Full Name*</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control" placeholder="Full Name*" required></br>
        <label>Age*</label></br>
        <input type="text" name="age" id="age" value="{{$students->age}}" class="form-control"placeholder="Age*"required></br>
        <label>BirthDay*</label></br>
        <input type="date" name="year" id="year" value="{{$students->year}}" class="form-control"placeholder="Birth Day*"required></br>
        <label>Year&Section*</label></br>

      <input type="text" name="section" id="section" value="{{$students->section}}" class="form-control"placeholder="Section*"required></br>
        <label>Course*</label></br>
        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"placeholder="Course*"required></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop