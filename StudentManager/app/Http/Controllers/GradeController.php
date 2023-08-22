<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Course;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades=Grade::all();
        return view('Grade.index',['grades'=>$grades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student=Student::all();
        $course=Course::all();
        return view('Grade.create',['student'=>$student, 'course'=>$course]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $grade=new Grade();
    $grade->grade=$request->grade;
    $grade->student_id=$request->student_id;
    $grade->course_id=$request->course_id;
    $grade->save();
    return redirect('/grades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade=Grade::find($id);
        return view("Grade.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grade=Grade::find($id);
        $student=Student::all();
        $course=Course::all();
       return view("Grade.edit",["grade"=>$grade, "course"=>$course,"student"=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grade=Grade::find($id);
        $grade->grade=$request->grade;
    $grade->student_id=$request->student_id;
    $grade->course_id=$request->course_id;
    $grade->save();
    return redirect("/grades");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade=Grade::find($id);
        $grade->delete();
        return redirect('/grades');
    }
}
