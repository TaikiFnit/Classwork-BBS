@extends('master')

@section('title')
Create new school
@stop

@section('body')

<h1>Create School</h1>

<form action="{{ action('SchoolController@store') }}" method="POST">
  <input type="text" name="name">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit" value="Create">
</form>

@stop
