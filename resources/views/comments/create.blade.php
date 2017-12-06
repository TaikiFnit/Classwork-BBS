@extends('master')

@section('title')
Create new Comments
@stop

@section('body')

<section class="container">
<h1>コメントを投稿する</h1>

<form action="{{ action('CommentController@store', ['school_id'=> $school_id, 'lecture_id'=> $lecture_id, 'bbs_id'=> $bbs_id]) }}" method="POST">

  <div class="form-group">
    <label for="school">学校名 : </label>
    <select name="school" id="school" class="form-control">
      @foreach ($schools as $school)
      <option value="{{ $school->id }}">{{ $school->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="author_name">名前 : </label>
    <input type="text" name="author_name" id="author_name" placeholder="名前" class="form-control">
  </div>

  <div class="form-group">
    <label for="group">グループ名 : </label>
    <select name="group" class="form-control">
      @foreach ($groups as $group)
      <option value="{{ $group->id }}">{{ $group->name }}</option>
      @endforeach
    </select>
   </div> 

  <div class="form-group">
    <label for="body">本文 : </label>
    <textarea type="text" name="body" id="body" placeholder="本文" rows="15" class="form-control">
    </textarea>
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
    <input type="submit" value="投稿する" class="btn btn-primary">
  </div>

</form>
</section>

@stop
