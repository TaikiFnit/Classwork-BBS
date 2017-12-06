@extends('master')

@section('title')
コメント一覧
@stop

@section('body')

<section class="container">
<h1>コメント一覧</h1>

<table class="table">
  <tr><th>学校名</th><th>グループ</th><th>投稿者</th><th>本文</th></tr>
  @foreach($comments as $comment)
  <tr>
    <td>{{ $comment->school->name }}</td>
    <td>{{ $comment->group->name }}</td>
    <td>{{ $comment->author_name }}</td>
    <td>{{ $comment->body }}</td>
  </tr>
  @endforeach
</table>

<a href="{{ action('CommentController@create', ['school_id'=> $school_id, 'lecture_id'=> $lecture_id, 'bbs_id'=> $bbs_id]) }}"><button class="btn btn-link btn-sm">新しくコメントを投稿する</button></a>

</section>
@stop
