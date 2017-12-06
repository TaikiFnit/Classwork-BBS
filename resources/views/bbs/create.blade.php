@extends('master')

@section('title')
Create new BBS
@stop

@section('body')

<h1>Create BBS</h1>

<form action="{{ action('BbsController@store', ['school_id'=> $school_id, 'lecture_id'=> $lecture_id]) }}" method="POST">
  <input type="text" name="name">
  <input type="date" name="date">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit" value="Create">
</form>

@stop
