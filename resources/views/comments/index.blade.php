@extends('master')

@section('title')
コメント一覧
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('LectureController@index', ['school_id'=> $school->id]) }}">{{ $lecture->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('BbsController@index', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id]) }}">{{ $bbs->name }}</a></li>
  <li class="breadcrumb-item active">コメント一覧</li>
</ol>

<section class="container">

<h1>コメント一覧</h1>

<a href="{{ action('CommentController@create', ['school'=> $school->id, 'lecture_id'=> $lecture->id, 'bbs_id'=> $bbs->id]) }}"><button class="btn btn-info btn-custom new-comment-btn">新しくコメントを投稿する</button></a>

<h4>{{ $school->name }}の投稿</h4>
<div class="row">
  <div class="form-group col-offset-8 col-4">
  <label for="group_filter">グループ毎に見る : </label>
  <select name="group_filter" id="group_filter" class="form-control">
    <option value="0">すべてのグループ</option>
    @foreach($groups as $group)
    <option value="{{ $group->id }}">グループ {{ $group->name }}</option>
    @endforeach
  </select>
  </div>
</div>

<table class="table">
  <tr><th>グループ</th><th>投稿者</th><th>本文</th></tr>
  @foreach($comments as $comment)
  <tr>
    <td>{{ $comment->group->name }}</td>
    <td>{{ $comment->author_name }}</td>
    <td>{{ $comment->body }}</td>
  </tr>
  @endforeach
</table>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ URL::asset('js/comment.js')}} "></script>
</section>
@stop
