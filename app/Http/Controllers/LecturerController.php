<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLecturer;
use App\Http\Requests\UpdateLecturer;
use App\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Lecturer::with('courses')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLecturer $request)
    {
        //
        return Lecturer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecturer  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecture)
    {
        //
        $lecture->load('courses');

        return $lecture;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecturer  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturer  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLecturer $request, Lecturer $lecture)
    {
        //
        $lecture->update($request->all());

        $lecture->load('courses');
        return $lecture;

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturer  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecture)
    {
        //

        $lecture->delete();
        return 'deleted';
    }
}
