@extends('master')

@section('title')
グループ一覧
@stop

@section('body')

<section class="container">
<h1><a href="{{ action('BbsController@index', ['school_id'=>$school_id, 'lecture_id'=>$lecture->id]) }}">{{ $lecture->name }}</a>のグループ一覧</h1>

<table class="table">
  <tr><th>グループ名</th></tr>
  @foreach($groups as $group)
  <tr>
      <td>{{ $group->name }}</td>
  </tr>
  @endforeach
</table>

<a href="{{ action('GroupController@create', ['school_id'=> $school_id, 'lecture_id'=> $lecture->id]) }}"><button class="btn btn-link">新しくグループを作成する</button></a>

</section>
@stop
