@extends('master')

@section('title')
学校一覧
@stop

@section('body')

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

</section>
@stop
