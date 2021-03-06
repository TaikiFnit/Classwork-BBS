@extends('master')

@section('title')
授業一覧
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item active">授業一覧</li>
</ol>

<section class="container">
<h1>授業一覧</h1>

<table class="table">
  <tr><th>科目名</th><th>担当教員</th><th>年</th></tr>
  @foreach($lectures as $lecture)
  <tr>
      <td><a href="{{ action('BbsController@index', ['school_id'=>$lecture->school_id, 'lecture_id'=>$lecture->id]) }}">{{ $lecture->name }}</a></td>
      <td>{{ $lecture->teacher_name }}</td>
      <td>{{ $lecture->year }}</td>
  </tr>
  @endforeach
</table>

<a href="{{ action('LectureController@create', ['school_id'=> $school->id]) }}"><button class="btn btn-link btn-sm">新しく授業を登録する</button></a>

</section>
@stop
