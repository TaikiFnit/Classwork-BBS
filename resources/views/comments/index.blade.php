@extends('master')

@section('title')
コメント一覧
@stop

@section('body')

<section class="container">
<a href="{{ action('CommentController@create', ['school'=> $school->id, 'lecture_id'=> $lecture_id, 'bbs_id'=> $bbs_id]) }}"><button class="btn btn-info btn-custom new-comment-btn">新しくコメントを投稿する</button></a>

<h1>コメント一覧</h1>

<h4>{{ $school->name }}の投稿</h4>
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


</section>
@stop
