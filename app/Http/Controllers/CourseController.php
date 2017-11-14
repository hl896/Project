<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\StoreCourse;
use App\Http\Requests\UpdateCourse;
use App\Lecture;
use App\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Course::with('students','lectures')->get();//model+ collections
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
    public function store(Request $request)
    {
        //
        return Course::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        $course->load('students','lectures');
        return $course;




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourse $request, Course $course)
    {
        //
        $course->update($request->all());
        $course->load('students','lectures');

        return $course;


    }

    public function addStudent(Course $course,Student $student){
        $course->students()->syncWithoutDetaching($student);
        $course->load('students','lectures');

        return $course;

    }


    public function removeStudent(Course $course,Student $student){
        $course->students()->detach($student);
        $course->load('students','lectures');

        return $course;
    }


    public function addLecture(Course $course, Lecture $lecture){
        $course->lectures()->syncWithoutDetaching($lecture);
        $course->load('students','lectures');
        return $course;

    }

    public function removeLecture(Course $course, Lecture $lecture){
        $course->lectures()->detach($lecture);
        $course->load('students','lectures');
        return $course;

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return 'deleted';
    }
}
