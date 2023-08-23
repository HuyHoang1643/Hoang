@extends('Layout.master')
@section('title', 'course')
@section('main')
<div class="course-content">
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('courses.create') }}"> Create New course</a>
  </div>
<table class="table" style="text-decoration:none">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->name }}</td>
            <td>{{$course->department->name}}</td>
            <td>
                <a href="/courses/{{ $course->id }}/edit" class="btn btn-primary" >Edit</a>
                <form action="/courses/{{ $course->id }}" method="post" style="display: inline-block">
                    @method('DELETE')
                    @csrf
                    <input  class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop