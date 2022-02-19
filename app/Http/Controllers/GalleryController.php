<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function addGallery()
    {
        return view('admin.add_gallery');
        # code...
    }
    public function uploadGallery(Request $request)
    {
        $ext = $request->file('image')->getClientOriginalExtension();
        $imagename = \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('galleryimage'),$imagename);

        $data = new Gallery();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = $imagename;
        $data->save();

        return redirect()->route('all_gallery');
        # code...
    }
    public function allGallery()
    {
        $galleries = Gallery::all();
        return view('admin.all_gallery',compact('galleries'));
        # code...
    }
    public function deleteGallery($id)
    {
        $data = Gallery::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editGallery($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.edit_gallery', compact('gallery'));
        # code...
    }
    public function updateGallery(Request $request,$id)
    {

        $update = Gallery::find($id);
        $update->title = $request->title;
        $update->description = $request->description;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->title).time().'.'.$ext;
            $request->image->move(public_path('galleryimage'),$imagename);
            $update->image = $request->image;
        }
        $update->save();

        return redirect()->route('all_gallery');
        # code...
    }
}
