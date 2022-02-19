<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function editAgenda()
    {
        $agenda = Agenda::first();
        return view('admin.update_agenda', compact('agenda'));
        # code...
    }
    public function updateAgenda(Request $request, $id)
    {

        $data = Agenda::find($id);
        $data->qoute = $request->qoute;
        $data->mission = $request->mission;
        $data->vision = $request->vision;
        $data->aim = $request->aim;
        $data->save();

        return back();
        # code...
    }
}
