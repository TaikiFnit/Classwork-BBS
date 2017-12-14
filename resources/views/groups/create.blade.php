@extends('master')

@section('title')
Create new Group
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('LectureController@index', ['school_id'=> $school->id]) }}">{{ $lecture->name }}</a></li>
  <li class="breadcrumb-item active">グループ作成</li>
</ol>

<section class="container">
<h1><a href="{{ action('BbsController@index', ['school_id'=>$school->id, 'lecture_id'=>$lecture->id]) }}">{{ $lecture->name }}</a>のグループを作成する</h1>

<form action="{{ action('GroupController@store', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id]) }}" method="POST">

  <div class="form-group">
    <label for="name">グループ名 : </label><input type="text" name="name" placeholder="グループ名" class="form-control form-control-lg" required>
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group submit-group">
    <input type="submit" value="作成" class="btn btn-primary btn-custom">
  </div>
</form>
</section>

@stop
