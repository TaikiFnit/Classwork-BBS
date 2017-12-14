@extends('master')

@section('title')
Create new BBS
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('LectureController@index', ['school_id'=> $school->id]) }}">{{ $lecture->name }}</a></li>
  <li class="breadcrumb-item active">ディスカッション作成</li>
</ol>

<section class="container">

<h1>ディスカッションの作成</h1>

<form action="{{ action('BbsController@store', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id]) }}" method="POST">
  <div class="form-group">
    <label for="name">ディスカッション名 : </label><input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="ディスカッション名" required>
  </div>

  <div class="form-group">
    <label for="date">授業日 : </label><input type="date" name="date" id="date" class="form-control form-control-lg" required>
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group submit-group">
    <input type="submit" value="作成" class="btn btn-primary btn-custom">
  </div>
</form>

</section>

@stop
