@extends('master')

@section('title')
ディスカッション一覧
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('LectureController@index', ['school_id'=> $school->id]) }}">{{ $lecture->name }}</a></li>
  <li class="breadcrumb-item active">ディスカッション一覧</li>
</ol>

<section class="container">
<h1>ディスカッション一覧</h1>

<table class="table">
  <tr><th>ディスカッション</th><th>授業日</th></tr>
  @foreach($bbs as $b)
  <tr>
      <td><a href="{{ action('CommentController@index', ['school_id'=> $school->id, 'lecture_id'=> $b->lecture_id, 'bbs_id'=> $b->id] ) }}">{{ $b->name }}</a></td>
      <td>{{ $b->date }}</td>
  </tr>
  @endforeach
</table>

<a href="{{ action('BbsController@create', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id]) }}"><button class="btn btn-link btn-sm">新しくディスカッションを作成する</button></a>

<a href="{{ action('GroupController@create', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id]) }}"><button class="btn btn-link btn-sm">新しくグループを作成する</button></a>

</section>
@stop
