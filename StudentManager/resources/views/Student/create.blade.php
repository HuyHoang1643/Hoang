@extends('Layout.master')
@section('title', 'Create student')
@section('main')
<div class="form-create">
<form action="/students" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
  <label  class="form-label" for="studentcode">Student code</label>
    <input  class="form-control" type="text" name="studentcode" id="studentcode">
  </div>
  <div class="mb-3">
  <label  class="form-label" for="image">Image</label>
  <input class="form-control" type="file" name="image" id="image">
  </div>
  <div class="mb-3">
  <label  class="form-label" for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name">
  </div>
  <div class="mb-3 ">
  <label  class="form-label" for="email">Email</label>
    <input class="form-control" type="text" name="email" id="email">
  </div>
  <div class="mb-3">
  <label  class="form-label" for="phonenumber">Phonenumber</label>
    <input class="form-control" type="text" name="phonenumber" id="phonenumber">
  </div>
  <div class="mb-3">
  <label  class="form-label" for="department_id">Department</label>
    <select class="form-select" name="department_id" id="department_id">
        @foreach($department as $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
        @endforeach
    </select>
</div>
  <div class="mb-3">
    <label  class="form-label" for="courses">Courses</label>
    <select  class="form-select" multiple aria-label="multiple select example" multiple name="courses[]" id="courses">
        @foreach($course as $course)
            <option value="{{$course->id}}">
              {{$course->name}}
            </option>
        @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary" >Create</button>
</form>
</div>
@stop