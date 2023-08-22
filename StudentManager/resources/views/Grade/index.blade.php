@extends('Layout.master')
@section('title', 'grade')
@section('main')
<div class="grade-content">
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('grades.create') }}"> Create New grade</a>
  </div>
<table class="table" style="text-decoration:none">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Student code</th>
      <th scope="col">Course</th>
      <th scope="col">Grade</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($grades as $grade)
        <tr>
             <td>{{ $loop->iteration}}</td>
            <td>{{ $grade->student->studentcode }}</td>
            <td>{{ $grade->course->name }}</td>
            <td >     {{$grade->grade}}</td>
            <td>
                <a href="/grades/{{ $grade->id }}/edit" class="btn btn-primary" >Edit</a>
                <form action="/grades/{{ $grade->id }}" method="post" style="display: inline-block">
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