<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorController extends Controller
{
    public function index()
    {
        $service_data = \App\Models\service::all(); // Assuming your model is named service
        // dd($doctor_data); // Comment out or remove this line
        return view('service_index', ['service_data' => $service_data]);
    }

    public function create(Request $request)
    {
        \App\Models\service::create([
            'name' => $request->input('name'),
        ]);

        return redirect('/servicedata')->with('success', 'New Data Insert');
    }

    public function edit($id)
    {
        $service_data = \App\Models\service::find($id);
        return view('edit',['service_data'=>$service_data]);
    }

    public function update(Request $request,$id)
    {
        $service_data = \App\Models\service::find($id);
        $service_data -> update($request->all());
        return redirect('/servicedata')->with('success', 'Data Successfully Updated');

    }

    public function delete($id)
    {
        $service_data = \App\Models\service::find($id);
        $service_data -> delete($service_data);
        return redirect('/service_data')->with('success', 'Data Successfully Deleted');

    }
}
