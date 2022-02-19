<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function uploadApplication(Request $request)
    {
        $data = new Application();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();

        return back()->with('application sent successfully');
        # code...
    }
    public function allApplication()
    {
        $applications = Application::all();
        return view('admin.all_application',compact('applications'));
        # code...
    }
    public function deleteApplication($id)
    {
        $data = Application::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
}
