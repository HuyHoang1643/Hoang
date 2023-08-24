<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
       return view('Student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $courses = Course::all();
        return view('Student.create', ['department' => $departments,'course' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new student();
        $student->studentcode = $request->studentcode;
        $student->name = $request->name;
        $student->Email = $request->email;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/students');
            $image->move($destinationPath, $image_name);
        }
        $student->image = $image_name;
        $student->phonenumber = $request->phonenumber;
        $student->department_id = $request->department_id;
        $student->save();
        $student->courses()->attach($request->courses);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
        return view('Student.show',['student'=>$student]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $student=Student::find($id);
       $department = Department::all();
       $courses = Course::all();
       return view('Student.edit',['student'=>$student, 'department'=>$department],['courses' => $courses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student=Student::find($id);
        $student->studentcode = $request->studentcode;
        $student->name = $request->name;
        $student->Email = $request->email;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/students');
            $image->move($destinationPath, $image_name);
        }
        $student->image = $image_name;
        $student->phonenumber = $request->phonenumber;
        $student->department_id = $request->department_id;
        $student->courses()->sync($request->courses);
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }
    public function search(){
        $search=$_GET['key'];
        $students=Student::where('name','LIKE','%'.$search.'%')->get();
        return view('Student.search',['students'=>$students]);
    }
}
