<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function addTeam()
    {
        return view('admin.add_team');
        # code...
    }
    public function uploadTeam(Request $request)
    {
        $ext = $request->file('image')->getClientOriginalExtension();
        $imagename = \Str::slug($request->name).time().'.'.$ext;
        $request->image->move(public_path('teamimage'),$imagename);

        $data = new Team();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->position = $request->position;
        $data->comment = $request->comment;
        $data->facebook = $request->facebook;
        $data->insta = $request->insta;
        $data->twitter = $request->twitter;
        $data->linkedin = $request->linkedin;
        $data->image = $imagename;
        $data->save();

        return redirect()->route('all_team');
        # code...
    }
    public function allTeam()
    {
        $teams = Team::all();
        return view('admin.all_team',compact('teams'));
        # code...
    }
    public function deleteTeam($id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editTeam($id)
    {
        $team = Team::find($id);
        return view('admin.edit_team', compact('team'));
        # code...
    }
    public function updateTeam(Request $request,$id)
    {

        $update = Team::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->position = $request->position;
        $update->comment = $request->comment;
        $update->facebook = $request->facebook;
        $update->insta = $request->insta;
        $update->twitter = $request->twitter;
        $update->linkedin = $request->linkedin;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('teamimage'),$imagename);
            $update->image = $request->image;
        }
        $update->save();

        return redirect()->route('all_team');
        # code...
    }
}
