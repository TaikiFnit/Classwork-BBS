@extends('master')

@section('title')
Create new Lecture
@stop

@section('body')

<h1>Create Lecture</h1>

<form action="{{ action('LectureController@store', ['school_id'=> $school_id]) }}" method="POST">
  <input type="text" name="name" placeholder="Name">
  <input type="text" name="teacher_name" placeholder="担当教員名">
  <input type="number" name="year" placeholder="Year">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit" value="Create">
</form>

@stop
