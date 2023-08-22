@extends('Layout.master')
@section('title','Create student')
@section('main')
<div class="form-create">
<form action="/departments" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
  <label for="name">Name</label>
    <input type="text" name="name" id="name">
  </div>
  <button type="submit" class="btn btn-primary" >Create</button>
</form>
</div>
@stop

