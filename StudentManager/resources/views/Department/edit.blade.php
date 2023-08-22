@extends('Layout.master')
@section('title','Create student')
@section('main')
<form action="/departments/{{ $department->id }}" method="post">
    @method('PUT')
    @csrf
  <div class="mb-3">
  <label  class="form-label" for="name">Name</label>
    <input  class="form-control"type="text" name="name" id="name" value="{{$department->name}}">
  </div>
  <button type="submit" class="btn btn-primary" >Edit</button>
</form>
@stop