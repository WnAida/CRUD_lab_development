<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;
// use App\Models\doctor;


class doctorController extends Controller
{
    public function index()
    {
        $doctor_data = doctor::all(); // Use the correct naming convention
        return view('index', ['doctor_data' => $doctor_data]);
    }

    public function create(Request $request)
    {
        \App\Models\doctor::create([
            'name' => $request->input('name'),
            'department' => $request->input('department'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
        ]);

        return redirect('/doctordata')->with('success', 'New Data Insert');
    }

    public function edit($id)
    {
        $doctor_data = \App\Models\doctor::find($id);
        return view('edit',['doctor_data'=>$doctor_data]);
    }

    public function update(Request $request,$id)
    {
        $doctor_data = \App\Models\doctor::find($id);
        $doctor_data -> update($request->all());
        return redirect('/doctordata')->with('success', 'Data Successfully Updated');

    }

    public function delete($id)
    {
        $doctor_data = \App\Models\doctor::find($id);
        $doctor_data -> delete($doctor_data);
        return redirect('/doctordata')->with('success', 'Data Successfully Deleted');

    }
}
