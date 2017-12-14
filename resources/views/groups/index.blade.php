@extends('master')

@section('title')
グループ一覧
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('LectureController@index', ['school_id'=> $school->id]) }}">{{ $lecture->name }}</a></li>
  <li class="breadcrumb-item active">グループ一覧</li>
</ol>

<section class="container">
<h1><a href="{{ action('BbsController@index', ['school_id'=>$school->id, 'lecture_id'=>$lecture->id]) }}">{{ $lecture->name }}</a>のグループ一覧</h1>

<table class="table">
  <tr><th>グループ名</th></tr>
  @foreach($groups as $group)
  <tr>
      <td>{{ $group->name }}</td>
  </tr>
  @endforeach
</table>

<a href="{{ action('GroupController@create', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id]) }}"><button class="btn btn-link">新しくグループを作成する</button></a>

</section>
@stop
