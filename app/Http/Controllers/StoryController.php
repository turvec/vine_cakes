<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function addStory()
    {
        return view('admin.add_story');
    }

    public function uploadStory(Request $request)
    {
        $story = new Story();
        $story->age = $request->age;
        $story->story = $request->story;
        $story->save();
    }

    public function allStory()
    {
        $story = Story::all();
        return view('admin.all_story', compact('story'));
    }

}
