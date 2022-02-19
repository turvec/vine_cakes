<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview()
    {
        return view('admin.add_review');
    }

    public function uploadReview(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:255',
            'name' => 'required|max:255'
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('reviewimage'),$imagename);


        $data = new Review();
        $data->name = $request->name;
        $data->profession = $request->profession;
        $data->comment = $request->comment;
        $data->image = $request->image;

        $data->save();

        return redirect()->route('all_review');
        # code...
    }
    public function allReview()
    {
        $reviews = Review::all();
        return view('admin.all_review',compact('reviews'));
        # code...
    }
    public function deleteReview($id)
    {
        $data = Review::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editReview($id)
    {
        $review = Review::find($id);
        return view('admin.update_review', compact('review'));
        # code...
    }
    public function updateReview(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|max:255',
            'name' => 'required|max:255'
        ]);
        $data = Review::find($id);
        $data->name = $request->name;
        $data->profession = $request->profession;
        $data->comment = $request->comment;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('reviewimage'),$imagename);
            $data->image = $request->image;
        }
        $data->save();

        return redirect()->route('all_review');
        # code...
    }
}
