@extends('Layout.master')
@section('title', 'student')
@section('main')
<div class="card">
<h1 class="card-title">Student Detail</h1>
    <div class="card-detail">
  <img style="width: 30rem;" class="card-img-top" src="/uploads/students/{{ $student->image }}" alt="Card image cap">
  <div class="detail-right">
     <h3>Name: {{ $student->name }}</h3>
     <p>Student code: {{ $student->studentcode }}</p>
    <p>Email: {{ $student->email }}</p>
     <p>Phonenumber: {{ $student->phonenumber }}</p>
     <p>Department: {{ $student->department->name }}</p>
     <a href="/students"><button type="button" class="btn btn-dark">Back</button></a>
    </div>
  </div>
  </div>
</div>
@stop