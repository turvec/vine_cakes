<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function uploadContact(Request $request)
    {
        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();

        return back()->with('message sent successfully');
        # code...
    }

    public function allContact()
    {
        $contacts = Contact::all();
        return view('admin.all_contact',compact('contacts'));
        # code...
    }
    
    public function deleteContact($id)
    {
        $data = Contact::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
}
