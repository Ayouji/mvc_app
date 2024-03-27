<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Istructor;
use App\Models\Student;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$courses = Course::all();
        $courses = Course::with('department')->get();
        return view('course.index', compact('courses'));
    }
    
    public function search(Request $request)
    {
        $search = $request->search;
        $student = Student::where('last_name', 'like','%'. $search. '%')->get();
        return view('student',compact('student'));
        /* if(request('search')){
            $student = Student::where('last_name', 'like', '%' . request('search'). '%')->get();
        } else{
            $student = Student::all();
        } */
    }
    public function create()
    {
       return view('create'); 
    }
    
    public function store(Request $request)
    {   
        $request->validate([
            'last_name' => 'required',
            'first_midname' => 'required',
            'enrollmentdate' => ['required']
        ]);
        $student = new Student();
        $student->last_name = $request->input('last_name');
        $student->first_midname = $request->input('first_midname');
        $student->enrollmentdate = $request->input('enrollmentdate');
        $student->save();
        return redirect()->route('student');
    }
    

    public function show($student_id)
    {
        //$index = Student::findOrFail($student_id);
        return view('detail', ['students'=> Student::findOrFail($student_id)]);
    }
   
    public function edit($student_id)
    {
        $student = Student::find($student_id);
        return view('edit', compact('student'));
    }
    

    public function update(Request $request, $student_id)
    {
        $student = Student::find($student_id);
        $student->last_name = $request->input('last_name');
        $student->first_midname = $request->input('first_midname');
        $student->enrollmentdate = $request->input('enrollmentdate');
        $student->update();
        return redirect('/student');
        //->with('status','Student Updated Successfully');
    }
   /*  public function delete(){
        return view('student.delete');
    } */

    public function destroy($student_id)
    {
        $students = Student::findOrFail($student_id);
        $students->delete();
        return view('/remove', compact('students'));
    }
}
