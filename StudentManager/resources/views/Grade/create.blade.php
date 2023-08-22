@extends('Layout.master')
@section('title', 'Create grade')
@section('main')
<div class="form-create">
<form action="/grades" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
  <label  class="form-label" for="grade">Grade</label>
    <input  class="form-control" type="text" name="grade" id="grade">
  </div>
  <div class="mb-3">
  <label  class="form-label" for="student_id">Student code</label>
    <select class="form-select" name="student_id" id="student_id">
        @foreach($student as $student)
            <option value="{{$student->id}}">{{$student->studentcode}}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
  <label  class="form-label" for="course_id">Course</label>
    <select class="form-select" name="course_id" id="course_id">
        @foreach($course as $course)
            <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
    </select>
</div>
  <button type="submit" class="btn btn-primary" >Create</button>
</form>
</div>
@stop