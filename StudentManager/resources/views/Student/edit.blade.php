@extends('Layout.master')
@section('title', 'Create student')
@section('main')
<form action="/students/{{$student->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
    @csrf
  <div class="mb-3">
  <label class="form-label"  for="image">Image</label>
  <input class="form-control" type="file" name="image" id="image" value="{{$student->image}}">
  </div>
  <div class="mb-3">
    <label class="form-label"  for="studentcode">Student code</label>
    <input class="form-control" type="text" name="studentcode" id="studentcode" value="{{$student->studentcode}}">
  </div>  
  <div class="mb-3">
  <label class="form-label" for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name"value="{{$student->name}}" >
  </div>
  <div class="mb-3 ">
  <label class="form-label"  for="email">Email</label>
    <input class="form-control" type="text" name="email" id="email" value="{{$student->email}}">
  </div>
  <div class="mb-3">
  <label class="form-label" for="phonenumber">Phonenumber</label>
    <input class="form-control" type="text" name="phonenumber" id="phonenumber" value="{{$student->phonenumber}}">
  </div>
  <div class="mb-4">
  <label class="form-label" for="department_id">Department</label>
    <select class="form-select" name="department_id" id="department_id">
        @foreach($department as $department)
            <option value="{{$department->id}}"@if($department->id == $student->department_id) selected @endif>{{$department->name}}</option>
        @endforeach
    </select>
    <div class="mb-2 ">
    <label class="form-label select-label" for="courses">Courses</label>
    <select   class="form-select" multiple aria-label="multiple select example" name="courses[]" id="courses" class="select" >
        @foreach($courses as $course)
            <option value="{{$course->id}}" @if(in_array($course->id, $student->courses->pluck('id')->toArray())) selected @endif>{{$course->name}}</option>
        @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary" >Save</button>
</form>
@stop