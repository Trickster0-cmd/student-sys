<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
         $students = Student::latest()->paginate(5);
    
        return view('student.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
       return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'StudentID' => 'required',
            'StudentFName' => 'required',
            'StudentMName' => 'required',
            'StudentLName' => 'required',
            'StudentAddress' => 'required',
            'Department' => 'required',
            'Course' => 'required',
            'Year' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
                        ->with('success','Student added successfully.');
    }

  
    public function show(Student $student)
    {
       return view('student.show',compact('student'));
    }

   
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

   
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'StudentID' => 'required',
            'StudentFName' => 'required',
            'StudentMName' => 'required',
            'StudentLName' => 'required',
            'StudentAddress' => 'required',
            'Department' => 'required',
            'Course' => 'required',
            'Year' => 'required',
        ]);
    
        // $student->update($request->all());
        $student->update($request->all());
    
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
    
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }
}
