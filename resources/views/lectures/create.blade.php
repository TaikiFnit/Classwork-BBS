@extends('master')

@section('title')
Create new Lecture
@stop

@section('body')

<section class="container">
<h1>授業を登録</h1>

<form action="{{ action('LectureController@store', ['school_id'=> $school_id]) }}" method="POST">
  <div class="form-group">
    <label for="name">授業名 : </label><input type="text" name="name" id="name" placeholder="Name" class="form-control">
  </div>
  <div class="form-group">
    <label for="teacher_name">担当教員名</label><input type="text" name="teacher_name" id="teacher_name" placeholder="担当教員名" class="form-control">
  </div>
  <div class="form-group">
    <label for="year">年 : </label><input type="number" name="year" id="year" placeholder="Year" class="form-control">
  </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <input type="submit" value="Create" class="btn btn-primary">
  </div>
</form>

</section>

@stop
