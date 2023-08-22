@extends('Layout.master')
@section('title','Create student')
@section('main')
<div class="form-create">
<form action="/departments" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
  <label  class="form-label" for="name">Name</label>
    <input  class="form-control" type="text" name="name" id="name">
  </div>
  <button type="submit" class="btn btn-primary" >Create</button>
</form>
</div>
@stop

