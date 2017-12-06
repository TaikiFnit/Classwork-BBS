<?php

namespace App\Http\Controllers;

use App\Group;
use App\Lecture;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($school_id, $lecture_id)
    {
        $lecture = Lecture::find($lecture_id);
        $groups = $lecture->groups;
        return view('groups/index', ['groups'=> $groups, 'lecture'=> $lecture, 'school_id'=> $school_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($school_id, $lecture_id)
    {
        $lecture = Lecture::find($lecture_id);
        return view('groups/create', ['school_id'=> $school_id, 'lecture'=> $lecture]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $school_id, $lecture_id)
    {
        $group = new Group();
        $group->name = $request->input('name');

        $lecture = Lecture::find($lecture_id);

        $lecture->groups()->save($group);

        return redirect()->action('GroupController@index', ['school_id'=> $school_id, 'lectuer_id'=> $lecture_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
