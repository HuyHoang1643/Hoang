<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $courses = Course::all();
         return view('teachers.create', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $image_name = time().$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/teachers');
        $image->move($destinationPath, $image_name);
    }

        $teacher->image = $image_name;
        $teacher->name = $request->get('name');
        $teacher->phonenumber = $request->get('phonenumber');  
        $teacher->email = $request->get('email');     
        $teacher->courses()->attach($request->courses);
        $teacher->save();
        return redirect('/teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $name)
    {
        $teacher = Teacher::find($name);
        $courses = Course::all();
        return view('teacher.edit', ['teacher'=> $teacher, 'courses' => $courses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $name)
    {
        $teacher = Teacher::find($name);
        if ($request->hasFile('image')) {
            $teacher->image = $request->file('image')->store('public/images');
        }
        $teacher->name = $request->get('name');
        $teacher->phonenumber = $request->get('phonenumber');  
        $teacher->email = $request->get('email');    
        $teacher->courses()->sync($request->courses);
        $teacher->save();
        return redirect('/teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $name)
    {
        $teacher = Teacher::find($name);
        $teacher->delete();
        return redirect('/teachers');
    }
}
