@extends('master')

@section('title')
Create new Comments
@stop

@section('body')

<h1>Create Comments</h1>

<form action="{{ action('CommentController@store', ['school_id'=> $school_id, 'lecture_id'=> $lecture_id, 'bbs_id'=> $bbs_id]) }}" method="POST">
  <input type="text" name="author_name">
  <input type="text" name="body">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit" value="Create">
</form>

@stop
