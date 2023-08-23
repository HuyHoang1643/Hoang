@extends('Layout.master')
@section('title', 'teacher')
@section('main')
<div class="card">
<h1 class="card-title">teacher Detail</h1>
    <div class="card-detail">
  <img style="width: 30rem;" class="card-img-top" src="/uploads/teachers/{{ $teacher->image }}" alt="Card image cap">
  <div class="detail-right">
    <h3>Name: {{ $teacher->name }}</h3>
    <p>Phone Number: {{ $teacher->phonenumber}}</p>
    <p>Email: {{ $teacher->email }}</p>
    <p>Course: {{ $teacher->course }}</p>
    <a href="/teachers"><button type="button" class="btn btn-dark">Back</button></a>
    </div>
  </div>
  </div>
</div>
@stop