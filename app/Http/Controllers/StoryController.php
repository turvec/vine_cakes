<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function editStory()
    {
        $story = Story::first();
        return view('admin.update_story', compact('story'));
    }

    public function updateStory(Request $request,$id)
    {
        $story = Story::find($id);
        $story->age = $request->age;
        $story->story = $request->story;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->age).time().'.'.$ext;
            $request->image->move(public_path('storyimage'),$imagename);
            $story->image = $request->image;
        }
        $story->save();

        return back();
    }


}
