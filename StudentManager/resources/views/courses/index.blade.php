@extends('Layout.master')
@section('title','courses')
@section('main')
<div class="content">
<div class="table-responsive">
<a class="btn btn-success" href="{{ route('courses.create') }}"> Create New Course</a>
  <table class="table table-primary">
      <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Department</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($courses as $course)
          <tr>
              <td>{{ $course->id }}</td>
              <td>{{ $course->name }}</td>
              <td>{{$course->department->name}}</td>
              <td>                  
                  <a href="/courses/{{$course->id}}/edit" class="btn btn-primary">Edit</a>
                  <form action="/courses/{{$course->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
</div>
@endsection
