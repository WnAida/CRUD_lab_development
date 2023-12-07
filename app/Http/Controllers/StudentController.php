<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data_student = \App\Models\student::all();
        // dd($data_student);
        return view('index', ['data_student'=>$data_student]);
    }
    public function create(Request $request)
    {
        \App\Models\Student::create([
            'FirstName' => $request->input('FirstName'),
            'SecondName' => $request->input('SecondName'),
            'Gender' => $request->input('Gender'),
            'Address' => $request->input('Address'),
        ]);

        return redirect('/studentdata')->with('success', 'New Data Insert');
    }

    public function edit($id)
    {
        $data_student = \App\Models\student::find($id);
        return view('edit',['data_student'=>$data_student]);
    }

    public function update(Request $request,$id)
    {
        $data_student = \App\Models\student::find($id);
        $data_student -> update($request->all());
        return redirect('/studentdata')->with('success', 'Data Successfully Updated');

    }

    public function delete($id)
    {
        $data_student = \App\Models\student::find($id);
        $data_student -> delete($data_student);
        return redirect('/studentdata')->with('success', 'Data Successfully Deleted');

    }





}
