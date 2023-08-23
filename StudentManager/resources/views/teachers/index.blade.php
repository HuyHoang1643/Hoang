@extends('Layout.master')
@section('title', 'teacher')
@section('main')
<div class="teacher-content">
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('teachers.create') }}"> Create New Teacher</a>
  </div>
<table class="table" style="text-decoration:none">
<thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Course</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($teachers as $teacher)
        <tr>
            <td>
            <img src="/uploads/teachers/{{ $teacher->image }}" width='50' height='50' class="img img-responsive">
            </td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->phonenumber }}</td>
            <td >
                @foreach($teacher->courses as $course)
                    <a href="/teachers/{{$course->id}}">{{ $course->name}}</a>
                @endforeach
            </td>
            <td>
            <a href="/teachers/{{$teacher->id }}" class="btn btn-info">Show</a>
                <a href="/teachers/{{ $teacher->id }}/edit" class="btn btn-primary" >Edit</a>
                <form action="/teachers/{{ $teacher->id }}" method="post" style="display: inline-block">
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