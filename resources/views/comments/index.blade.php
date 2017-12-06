@extends('master')

@section('title')
ディスカッション一覧
@stop

@section('body')

<section class="container">
<h1>ディスカッション一覧</h1>

<table class="table">
  <tr><th>ディスカッション</th><th>授業日</th></tr>
  @foreach($bbs as $b)
  <tr>
      <td><a href="{{ action('CommentController@index', ['school_id'=>$school_id, 'lecture_id'=>$b->lecture_id, 'bbs_id'=> $b->id]) }}">{{ $b->name }}</a></td>
      <td>{{ $b->date }}</td>
  </tr>
  @endforeach
</table>

</section>
@stop
