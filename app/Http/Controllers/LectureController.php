<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\School;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($school_id)
    {
        return School::find($school_id)->lectures;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($school_id)
    {
        return view('lectures/create', ['school_id'=>$school_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $school_id)
    {
        $lecture = new Lecture();
        $lecture->name = $request->input('name');

        $school = School::find($school_id);

        $school->lectures()->save($lecture);

        return redirect()->action('LectureController@index', ['$school_id'=> $school_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        //
    }
}
