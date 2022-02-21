<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\Ingredient;
use App\TutorialVideo;
use Illuminate\Http\Request;

class TutorialVideoController extends Controller
{
    public function editTutorial()
    {
        $tutorial = TutorialVideo::first();
        return view('admin.update_tutorial',compact('tutorial'));
        # code...
    }
    public function updateTutorial(Request $request, $id)
    {
        $update = TutorialVideo::find($id);
        $update->title = $request->title;
        $update->video_link = $request->video_link;
        $update->save();

        return back();
        # code...
    }
    public function addIngredient($id)
    {
        $tutorial = TutorialVideo::find($id);
        return view('admin.add_ingredient',compact('tutorial'));
    }
    public function uploadIngredient(Request $request,$id)
    {

        $data = new Ingredient();
        $data->tutorial_id = $id;
        $data->name = $request->name;
        $data->measurement = $request->measurement;
        $data->save();

        return redirect()->route('all_ingredient');
        # code...
    }
    public function allIngredient()
    {
        $ingredients = Ingredient::all();
        return view('admin.all_ingredient',compact('ingredients'));
        # code...
    }
    public function deleteIngredient($id)
    {
        $data = Ingredient::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editIngredient($id)
    {
        $ingredient = Ingredient::find($id);
        return view('admin.edit_ingredient', compact('ingredient'));
        # code...
    }
    public function updateIngredient(Request $request,$id)
    {

        $update = Ingredient::find($id);
        $update->name = $request->name;
        $update->measurement = $request->measurement;
        $update->save();

        return redirect()->route('all_ingredient');
        # code...
    }
    public function addEquipment($id)
    {
        $tutorial = TutorialVideo::find($id);
        return view('admin.add_equipment',compact('tutorial'));
    }
    public function uploadEquipment(Request $request,$id)
    {

        $data = new Equipment();
        $data->tutorial_id = $id;
        $data->name = $request->name;
        $data->save();

        return redirect()->route('all_equipment');
        # code...
    }
    public function allEquipment()
    {
        $equipments = Equipment::all();
        return view('admin.all_equipment',compact('equipments'));
        # code...
    }
    public function deleteEquipment($id)
    {
        $data = Equipment::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editEquipment($id)
    {
        $equipment = Equipment::find($id);
        return view('admin.edit_equipment', compact('equipment'));
        # code...
    }
    public function updateEquipment(Request $request,$id)
    {

        $update = Equipment::find($id);
        $update->name = $request->name;
        $update->measurement = $request->measurement;
        $update->save();

        return redirect()->route('all_equipment');
        # code...
    }
}
