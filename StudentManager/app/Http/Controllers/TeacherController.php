<?php

namespace App\Http\Controllers;

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
         return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->get('name');
        $teacher->phonenumber = $request->get('phonenumber');  
        $teacher->email = $request->get('email'); 

        
        if ($request->hasFile('image')) {
            $teacher->image = $request->file('image')->store('public/images');
            $teacher->image = env('APP_URL').str_replace('public/', '/upload/', $teacher->image);
        }
        
        $teacher->name = $request->get('name');
        $teacher->phonenumber = $request->get('phonenumber');  
        $teacher->email = $request->get('email');      
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $name)
    {
        $teacher = Teacher::find($name);
        $teacher->phonenumber = $request->phonenumber;
        $teacher->email = $request->email;  
        if ($request->hasFile('image')) {
            $teacher->image = $request->file('image')->store('public/images');
        }
        $teacher->name = $request->name;
        $teacher->phonenumber = $request->phonenumber;
        $teacher->email = $request->email;    
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
