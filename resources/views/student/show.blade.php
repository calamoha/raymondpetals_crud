@extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header bg-primary">Students Page</div>
  <div class="card-body bg-success">
  
        <div class="card-body ">
        <h5 class="card-title">Full Name : {{ $students->name }}</h5>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Year : {{ $students->year }}</p>
        <p class="card-text">Section : {{ $students->section }}</p>
        <p class="card-text">Course : {{ $students->course }}</p>
  </div>
      
    </hr>
  
  </div>
</div>