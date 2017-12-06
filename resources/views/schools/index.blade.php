@extends('master')

@section('title')
学校一覧
@stop

@section('body')

<section class="container">
<h1>学校一覧</h1>

<table class="table">
  @foreach($schools as $school)
  <tr><th><a href="{{ action('LectureController@index', ['school_id'=>$school->id]) }}">{{ $school->name }}</a></th></tr>
  @endforeach
</table>

</section>
@stop
