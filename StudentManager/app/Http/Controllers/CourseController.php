<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all();
        $departments = Department::all();
        return view('courses.create',['course' => $course,'department' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->id = $request->get('id');
        $course->name = $request->get('name'); 
        $course->department_id= $request->department_id;       
        $course->save();
        return redirect('courses')->with('success', 'successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        $departments = Department::all();
        return view('courses.show', ['course' => $course, 'department' => $departments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        $departments = Department::all();
        return view('courses.edit', ['course' => $course,'department' => $departments]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        $course->id= $request->get('id');
        $course->name = $request->get('name');
        $course->save();
        return redirect('courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return redirect('courses');
    }
}
