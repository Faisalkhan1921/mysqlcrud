<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $data = Student::latest()->get();
        return view('student.addstudent',compact('data'));
    }

    public function addstudent(Request $request)
    {
        Student::insert([
            'roll_no' => $request->srollno,
            'sname' => $request->sname,
        ]);
        return redirect()->back();
    }

    public function EditStudent($id)
    {
        $data = Student::findOrFail($id);
        return view('student.edit_student',compact('data'));
    }

    public function updatestudent(Request $request, $id)
    {
        Student::findOrFail($id)->update([
            'roll_no' => $request->srollno,
            'sname' => $request->sname,
        ]);

        return redirect('/crud/operation');
    }

    public function deletestudent($id)
    {
        $data = Student::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}
