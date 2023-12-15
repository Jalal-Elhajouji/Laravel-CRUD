<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function list_student(){
        $students = Student::paginate(8);
        return view('student.list', compact('students'));
    }
    public function add_student(){
        return view('student.add');
    }
    public function add_student_treatment(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required'
        ]);
        $student = new Student;
        $student->first_name = $request->fname;
        $student->last_name = $request->lname;
        $student->email = $request->email;
        $student->save();
        return redirect('/student')->with('success', 'Student has been added');
    }
    public function update_student($id){
        $student = Student::find($id);
        return view('student.update', compact('student'));
    }
    public function update_student_treatment(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required'
        ]);
        $student = Student::find($request->id);
        $student->first_name = $request->fname;
        $student->last_name = $request->lname;
        $student->email = $request->email;
        $student->update();
        return redirect('/student')->with('updated', 'Student has been updated');
    }
    public function delete_student($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/student')->with('deleted', 'Student has been deleted');
    }
}
