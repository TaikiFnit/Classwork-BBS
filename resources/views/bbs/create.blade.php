@extends('master')

@section('title')
Create new BBS
@stop

@section('body')

<section class="container">

<h1>ディスカッションの作成</h1>

<form action="{{ action('BbsController@store', ['school_id'=> $school_id, 'lecture_id'=> $lecture_id]) }}" method="POST">
  <div class="form-group">
    <label for="name">ディスカッション名 : </label><input type="text" name="name" id="name" class="form-control" placeholder="ディスカッション名">
  </div>

  <div class="form-group">
    <label for="date">授業日 : </label><input type="date" name="date" id="date" class="form-control">
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
    <input type="submit" value="作成" class="btn btn-primary">
  </div>
</form>

</section>

@stop
