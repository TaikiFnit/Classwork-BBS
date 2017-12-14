@extends('master')

@section('title')
学校一覧
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item active">学校一覧</li>
</ol>


<section class="container">
<h1>学校一覧</h1>

<table class="table">
  @foreach($schools as $school)
  <tr><th><a href="{{ action('LectureController@index', ['school_id'=>$school->id]) }}">{{ $school->name }}</a></th></tr>
  @endforeach
</table>

<a href="{{ action('SchoolController@create') }}"><button class="btn btn-link btn-sm">新しく学校を登録する</button></a>

</section>
@stop
