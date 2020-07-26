<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students=Student::all();
        return view('student',['student'=>$students,'layout'=>'student']);
    }



    public function store(Request $request)
    {
        $student = new Student();
        $student-> firstName = $request->input('firstName');
        $student-> lastName = $request->input('lastName');
        $student-> age = $request->input('age');
        $student-> speciality = $request->input('speciality');
        $student->save();
        return redirect('/');
    }




    public function update(Request $request, $id)
    {
        $student=Student::find($id);

        $student-> firstName = $request->input('firstName');
        $student-> lastName = $request->input('lastName');
        $student-> age = $request->input('age');
        $student-> speciality = $request->input('speciality');
        $student->save();
        return redirect('/');
    }


    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/');

    }
}
