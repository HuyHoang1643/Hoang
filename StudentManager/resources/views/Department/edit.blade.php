@extends('Layout.master')
@section('title','Create student')
@section('main')
<form action="/departments/{{ $department->id }}" method="post">
    @method('PUT')
    @csrf
  <div class="mb-3">
  <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$department->name}}">
  </div>
  <button type="submit" class="btn btn-primary" >Edit</button>
</form>
@stop