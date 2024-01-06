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
        appointment::create([
            'name' => $request->input('name'),
            'faculty' => $request->input('faculty'),
            'date' => $request->input('date'),
            'phone_number' => $request->input('phone_number'),
            'reason' => $request->input('reason'),
        ]);

        return redirect()->route('appointment.index')->with('success', 'New Data Inserted');
    }


    public function editappointment($id)
    {
        $appointment_data = \App\Models\appointment::find($id);
        return view('appointment_edit', ['appointment_data' => $appointment_data]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'faculty' => 'required',
            'date' => 'required|date',
            'phone_number' => 'required',
            'reason' => 'required',
        ]);

        // Find the appointment data
        $appointment_data = \App\Models\appointment::find($id);

        if (!$appointment_data) {
            // Handle the case where the appointment data is not found, for example, redirect to a 404 page
            abort(404);
        }

        // Update the appointment data
        $appointment_data->update($request->all());

        // Redirect using the named route
        return redirect()->route('appointment.index')->with('success', 'Data Successfully Updated');
    }


    public function delete($id)
    {
        $appointment_data = \App\Models\appointment::find($id);

        if ($appointment_data) {
            $appointment_data->delete();
            return redirect()->route('appointment.index')->with('success', 'Data Successfully Deleted');
        } else {
            return redirect()->route('appointment.index')->with('error', 'Data Not Found');
        }
    }


}
