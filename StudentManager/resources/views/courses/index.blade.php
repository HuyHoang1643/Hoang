@extends('layouts.master')
@section('title','Course Index')
@section('main')
<div class="table-responsive">
  <table class="table table-primary">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($courses as $course)
          <tr>
              <td>{{ $course->id }}</td>
              <td>{{ $course->name }}</td>
              <td>
                  <a href="/ids/{{$course->id}}" class="btn btn-info">Show</a>
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
@endsection
