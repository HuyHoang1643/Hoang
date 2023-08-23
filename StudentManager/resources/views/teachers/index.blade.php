@extends('Layout.master')
@section('title','teachers')
@section('main')
<div class="content" style = "padding-top:20px">

<div class="table-responsive">
<a class="btn btn-success" href="{{ route('teachers.create') }}"> Create New Teacher</a>
  <table class="table table-primary">
      <thead>
          <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Phonenumber</th>
              <th>Email</th>
              <th>Course</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($teachers as $teacher)
          <tr>
            <td><img src="/uploads/teachers/{{ $teacher->image }}" alt="" width='50' height='50'></td>
              <td>{{ $teacher->name }}</td>
              <td>{{ $teacher->phonenumber }}</td>
              <td>{{ $teacher->email }}</td>
              <td >
                @foreach($teacher->courses as $course)
                    <a href="/teachers/{{$course->id}}">{{ $course->name}}</a>
                @endforeach
            </td>
              <td>
                  <a href="/teachers/{{$teacher->id}}" class="btn btn-info">Show</a>
                  <a href="/teachers/{{$teacher->id}}/edit" class="btn btn-primary">Edit</a>
                  <form action="/teachers/{{$teacher->id}}" method="POST">
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
