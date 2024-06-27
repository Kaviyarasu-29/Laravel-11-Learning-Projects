<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function Home()
    {
        $students = Student::all();
        return view('Student', compact('students'));
    }

    public function addStudent(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string',
            'gender' => 'required|in:Male,Female,Other',
            'department' => 'required|string',
            'joined_date' => 'required|date',
        ]);

        Student::create($validatedData);

        return redirect()->route('HomePage')->with('Message', 'Student registered successfully!');
    }







    // public function addStudent(Request $request)
    // {
    //     // dd($request -> add());  //dd -> dump and die
    //     // Student::create($request->add());
    //     return redirect()->route('HomePage') - with('Message', 'Student registered Successfully!');
    // }
}
