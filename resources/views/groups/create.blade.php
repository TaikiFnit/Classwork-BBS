@extends('master')

@section('title')
Create new Group
@stop

@section('body')

<h1>Create Comments</h1>

<form action="{{ action('GroupController@store', ['school_id'=> $school_id, 'lecture_id'=> $lecture_id]) }}" method="POST">

  <input type="text" name="name" placeholder="Group Name">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit" value="Create">
</form>

@stop
