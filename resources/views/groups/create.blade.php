@extends('master')

@section('title')
Create new Group
@stop

@section('body')

<section class="container">
<h1><a href="{{ action('BbsController@index', ['school_id'=>$school_id, 'lecture_id'=>$lecture->id]) }}">{{ $lecture->name }}</a>のグループを作成する</h1>

<form action="{{ action('GroupController@store', ['school_id'=> $school_id, 'lecture_id'=> $lecture->id]) }}" method="POST">

  <div class="form-group">
    <label for="name">グループ名 : </label><input type="text" name="name" placeholder="グループ名" class="form-control">
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <input type="submit" value="作成" class="btn btn-primary">
  </div>
</form>
</section>

@stop
