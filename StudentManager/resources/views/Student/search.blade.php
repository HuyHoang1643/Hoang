@extends('Layout.master')
@section('title', 'student')
@section('main')
<div class="student-content">
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
  </div>
<table class="table" style="text-decoration:none">
<thead>
    <tr>
      <th scope="col">Studentcode</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Department</th>
      <th scope="col">Course</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
        <tr>
             <td>{{ $student->studentcode }}</td>
            <td>
            <img src="/uploads/students/{{ $student->image }}" width='50' height='50' class="img img-responsive">
            </td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phonenumber }}</td>
            <td>{{ $student->department->name }}</td>
            <td >
                @foreach($student->courses as $course)
                    <a href="/students/{{$course->id}}">{{ $course->name}}</a>
                @endforeach
            </td>
            <td>
            <a href="/students/{{$student->id }}" class="btn btn-info">Show</a>
                <a href="/students/{{ $student->id }}/edit" class="btn btn-primary" >Edit</a>
                <form action="/students/{{ $student->id }}" method="post" style="display: inline-block">
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