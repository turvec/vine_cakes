<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addService()
    {
        return view('admin.add_service');
        # code...
    }
    public function uploadService(Request $request)
    {
        $ext = $request->file('image')->getClientOriginalExtension();
        $imagename = \Str::slug($request->name).time().'.'.$ext;
        $request->image->move(public_path('serviceimage'),$imagename);

        $data = new Service();
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->image = $imagename;
        $data->save();

        return redirect()->route('all_service');
        # code...
    }
    public function allService()
    {
        $services = Service::all();
        return view('admin.all_service',compact('services'));
        # code...
    }
    public function deleteService($id)
    {
        $data = Service::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editService($id)
    {
        $service = Service::find($id);
        return view('admin.edit_service', compact('service'));
        # code...
    }
    public function updateService(Request $request,$id)
    {

        $update = Service::find($id);
        $update->name = $request->name;
        $update->price = $request->price;
        $update->description = $request->description;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('serviceimage'),$imagename);
            $update->image = $request->image;
        }
        $update->save();

        return redirect()->route('all_service');
        # code...
    }
}
