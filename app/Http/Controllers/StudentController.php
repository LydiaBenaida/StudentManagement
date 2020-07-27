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
    public function show( $id)
    {
        $student=Student::find($id);
        return view('showStudent',['student'=>$student,'layout'=>'showStudent']);
    }



    public function store(Request $request)
    {
        $student = new Student();
        $student-> firstName = $request->input('firstName');
        $student-> lastName = $request->input('lastName');
        $student-> age = $request->input('age');
        $student-> speciality = $request->input('speciality');
        $student->save();
        return redirect('/student');
    }




        public function update(Request $request, $id)
    {
        $student=Student::find($id);

        $student-> firstName = $request->get('firstName');
        $student-> lastName = $request->get('lastName');
        $student-> age = $request->get('age');
        $student-> speciality = $request->get('speciality');
        $student->save();
        return redirect('/student');
    }


    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('/student')->with('success', 'Contact deleted!');

    }

}
