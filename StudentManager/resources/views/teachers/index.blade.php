@extends('layouts.app')
@section('title','Teacher Index')
@section('main')
<div class="table-responsive">
  <table class="table table-primary">
      <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($teachers as $teacher)
          <tr>
              <td>{{ $teacher->name }}</td>
              <td>{{ $teacher->phone }}</td>
              <td>{{ $teacher->email }}</td>
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
@endsection
