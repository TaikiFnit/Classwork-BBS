<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Bbs;
use App\School;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($school_id, $lecture_id, $bbs_id)
    {
        $bbs = Bbs::find($bbs_id);
        return $bbs->comments;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($school_id, $lecture_id, $bbs_id)
    {
        $schools = School::all();
        return view('comments/create', ['school_id'=>$school_id, 'lecture_id'=> $lecture_id, 'bbs_id'=> $bbs_id, 'schools'=> $schools]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $school_id, $lecture_id, $bbs_id)
    {
        $comment = new Comment();
        $comment->author_name = $request->input('author_name');
        $comment->body = $request->input('body');
        $comment->school_id = $request->input('school');

        $bbs = Bbs::find($bbs_id);
        $bbs->comments()->save($comment);

        return redirect()->action('CommentController@index', ['school_id'=> $school_id, 'lectuer_id'=> $lecture_id, 'bbs_id'=> $bbs_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
