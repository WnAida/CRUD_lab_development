<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function index()
    {
        $appointment_data = appointment::all();
        // dd($appointment_data);// Use the correct naming convention
        return view('appointment_index', ['appointment_data' => $appointment_data]);
    }
    public function create()
    {
        return view('appointment_create');
    }



    public function store(Request $request)
    {
        \App\Models\appointment::create([
            'name' => $request->input('name'),
            'faculty' => $request->input('faculty'),
            'date' => $request->input('date'),
            'phone_number' => $request->input('phone_number'),
            'reason' => $request->input('reason'),
        ]);

        return redirect()->route('appointment.index')->with('success', 'New Data Inserted');
    }


    public function edit($id)
    {
        $appointment = \App\Models\appointment::find($id);
        return view('edit',['appointment_data'=>$appointment]);
    }

    public function update(Request $request,$id)
    {
        $appointment = \App\Models\appointment::find($id);
        $appointment -> update($request->all());
        return redirect('/appointmentdata')->with('success', 'Data Successfully Updated');

    }

    public function delete($id)
    {
        $appointment = \App\Models\appointment::find($id);
        $appointment -> delete($appointment);
        return redirect('/appointmentdata')->with('success', 'Data Successfully Deleted');

    }
}
