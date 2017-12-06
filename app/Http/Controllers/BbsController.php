<?php

namespace App\Http\Controllers;

use App\Bbs;
use App\School;
use App\Lecture;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($school_id, $lecture_id)
    {
        $lecture = Lecture::find($lecture_id);
        $bbs = $lecture->bbs;
        return view('bbs/index', ['bbs'=> $bbs, 'school_id'=> $school_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($school_id, $lecture_id)
    {
        return view('bbs/create',  ['school_id'=>$school_id, 'lecture_id'=> $lecture_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $school_id, $lecture_id)
    {
        $bbs = new Bbs();
        $bbs->name = $request->input('name');
        $bbs->date = $request->input('date');

        $lecture = Lecture::find($lecture_id);

        $lecture->bbs()->save($bbs);

        return redirect()->action('BbsController@index', ['school_id'=> $school_id, 'lectuer_id'=> $lecture_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bbs  $bbs
     * @return \Illuminate\Http\Response
     */
    public function show(Bbs $bbs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bbs  $bbs
     * @return \Illuminate\Http\Response
     */
    public function edit(Bbs $bbs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bbs  $bbs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bbs $bbs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bbs  $bbs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bbs $bbs)
    {
        //
    }
}
