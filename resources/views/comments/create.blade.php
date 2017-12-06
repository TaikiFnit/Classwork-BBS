@extends('master')

@section('title')
Create new Comments
@stop

@section('body')

<h1>Create Comments</h1>

<form action="{{ action('CommentController@store', ['school_id'=> $school_id, 'lecture_id'=> $lecture_id, 'bbs_id'=> $bbs_id]) }}" method="POST">

  <select name="school">
    @foreach ($schools as $school)
    <option value="{{ $school->id }}">{{ $school->name }}</option>
    @endforeach
  </select>

  <input type="text" name="author_name" placeholder="名前">

  <select name="group">
    @foreach ($groups as $group)
    <option value="{{ $group->id }}">{{ $group->name }}</option>
    @endforeach
  </select>

  <input type="text" name="body" placeholder="本文">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit" value="Create">
</form>

@stop
