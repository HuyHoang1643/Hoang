@extends('Layout.master')
@section('title', 'edit grade')
@section('main')
<div class="form-create">
<form action="/grades/{{$grade->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
  <label  class="form-label" for="grade">Grade</label>
    <input  class="form-control" type="text" name="grade" id="grade" value="{{$grade->grade}}">
  </div>
  <div class="mb-3">
  <label  class="form-label" for="student_id">Student code</label>
    <select class="form-select" name="student_id" id="student_id">
        @foreach($student as $student)
            <option value="{{$student->id}}"@if($student->id == $grade->student_id) selected @endif>{{$student->studentcode}}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
  <label  class="form-label" for="course_id">Course</label>
    <select class="form-select" name="course_id" id="course_id">
        @foreach($course as $course)
            <option value="{{$course->id}}"@if($course->id==$grade->course_id) selected @endif>{{$course->name}}</option>
        @endforeach
    </select>
</div>
  <button type="submit" class="btn btn-primary" >Save</button>
</form>
</div>
@stop