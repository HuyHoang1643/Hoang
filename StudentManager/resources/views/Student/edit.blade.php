@extends('Layout.master')
@section('title', 'Create student')
@section('main')
<form action="/students/{{$student->id}}" method="post" enctype="multipart/form-data">
@method('PUT')
    @csrf
  <div class="mb-3">
  <label for="image">Image</label>
  <input type="file" name="image" id="image" value="{{$student->image}}">
  </div>
  <div class="mb-3">
    <label for="studentcode">Student code</label>
    <input type="text" name="studentcode" id="studentcode" value="{{$student->studentcode}}">
  </div>  
  <div class="mb-3">
  <label for="name">Name</label>
    <input type="text" name="name" id="name"value="{{$student->name}}" >
  </div>
  <div class="mb-3 ">
  <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$student->email}}">
  </div>
  <div class="mb-3">
  <label for="phonenumber">Phonenumber</label>
    <input type="text" name="phonenumber" id="phonenumber" value="{{$student->phonenumber}}">
  </div>
  <div class="mb-4">
  <label for="department_id">Department</label>
    <select name="department_id" id="department_id">
        @foreach($department as $department)
            <option value="{{$department->id}}"@if($department->id == $student->department_id) selected @endif>{{$department->name}}</option>
        @endforeach
    </select>
    <div class="mb-2 ">
    <label class="form-label select-label" for="courses">Courses</label>
    <select name="courses[]" id="courses" class="select" multiple>
        @foreach($courses as $course)
            <option value="{{$course->id}}" @if(in_array($course->id, $student->courses->pluck('id')->toArray())) selected @endif>{{$course->name}}</option>
        @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary" >Save</button>
</form>
@stop