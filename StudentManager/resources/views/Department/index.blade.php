@extends('Layout.master')
@section('title', 'department')
@section('main')
<div class="department-content">
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('departments.create') }}"> Create New department</a>
  </div>
<table class="table">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($departments as $department)
        <tr>
        <td>{{ $loop->iteration }}</td>
            <td>{{ $department->name }}</td>
            <td>
                <a href="/departments/{{$department->id }}/edit" class="btn btn-primary">Edit</a>
                <form action="/departments/{{$department->id }}" method="post" style="display: inline-block">
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