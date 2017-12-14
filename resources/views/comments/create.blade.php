@extends('master')

@section('title')
Create new Comments
@stop

@section('body')

<ol class="breadcrumb container">
  <li class="breadcrumb-item"><a href="{{ action('SchoolController@index') }}">{{ $school->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('LectureController@index', ['school_id'=> $school->id]) }}">{{ $lecture->name }}</a></li>
  <li class="breadcrumb-item"><a href="{{ action('BbsController@index', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id]) }}">{{ $bbs->name }}</a></li>
  <li class="breadcrumb-item active">コメント作成</li>
</ol>

<section class="container">
<h1>コメントを投稿する</h1>

<form action="{{ action('CommentController@store', ['school_id'=> $school->id, 'lecture_id'=> $lecture->id, 'bbs_id'=> $bbs->id]) }}" method="POST">

  <div class="form-group">
    <label for="author_name">名前 : </label>
    <input type="text" name="author_name" id="author_name" placeholder="名前" class="form-control"  required>
  </div>

  <div class="form-group">
    <label for="group">グループ名 : </label>
    <select name="group" class="form-control" required>
      @foreach ($groups as $group)
      <option value="{{ $group->id }}">{{ $group->name }}</option>
      @endforeach
    </select>
   </div> 

  <div class="form-group">
    <label for="body">本文 : </label>
    <textarea type="text" name="body" id="body" rows="15" class="form-control" required></textarea>
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group submit-group">
    <input type="submit" value="投稿する" class="btn btn-primary btn-custom">
  </div>

</form>
</section>

@stop
