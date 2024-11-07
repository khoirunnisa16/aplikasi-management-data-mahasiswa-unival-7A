<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = \App\Models\Student::paginate(10);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nim' => 'required',    
        'nama' => 'required',
        'tempat_lahir' =>'required',
        'tanggal_lahir' =>'required',
        // 'kelas' => 'required',
    ]);

        $student = new Student();
        $student->nim = $request->nim;
        $student->nama = $request->nama;
        $student->tempat_lahir = $request->tempat_lahir;
        $student->tanggal_lahir = $request->tanggal_lahir;
        // $student->kelas = $request->kelas;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->nim = $request->nim;
        $student->nama = $request->nama;
        $student->tempat_lahir = $request->tempat_lahir;
        $student->tanggal_lahir = $request->tanggal_lahir;
        // $student->kelas = $request->kelas;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $student = Student::find($id);
    
    if ($student) {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }

    return redirect()->route('student.index')->with('error', 'Student not found.');
    }
}
