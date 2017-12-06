@extends('master')

@section('title')
Create new school
@stop

@section('body')

<section class="container">
<h1>学校を登録</h1>

<form action="{{ action('SchoolController@store') }}" method="POST">
  
  <div class="form-group">
    <label for="name">学校名 : </label><input type="text" name="name" id="name" class="form-control">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </div>

  <div class="form-group">
    <input type="submit" value="Create" class="btn btn-primary">
  </div>

</form>

@stop
