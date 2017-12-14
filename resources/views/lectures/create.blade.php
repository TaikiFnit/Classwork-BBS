@extends('master')

@section('title')
Create new Lecture
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item active">授業登録</li>
</ol>

<section class="container">
<h1>授業を登録</h1>

<form action="{{ action('LectureController@store', ['school_id'=> $school->id]) }}" method="POST">
  <div class="form-group">
    <label for="name">授業名 : </label><input type="text" name="name" id="name" placeholder="Name" class="form-control form-control-lg" required>
  </div>
  <div class="form-group">
    <label for="teacher_name">担当教員名</label><input type="text" name="teacher_name" id="teacher_name" placeholder="担当教員名" class="form-control form-control-lg" required>
  </div>
  <div class="form-group">
    <label for="year">年 : </label><input type="number" name="year" id="year" placeholder="Year" class="form-control form-control-lg" required>
  </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group submit-group">
    <input type="submit" value="Create" class="btn btn-primary btn-custom">
  </div>
</form>

</section>

@stop
