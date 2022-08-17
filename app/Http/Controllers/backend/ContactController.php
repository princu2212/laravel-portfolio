<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        $contact = Contact::find(1);
        return view('backend.contact.contact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = contact::find($id);
        $contact->linkedin = $request->linkedin;
        $contact->github = $request->github;
        $contact->gitlab = $request->gitlab;
        $contact->whatsapp = $request->whatsapp;
        $contact->skype = $request->skype;

        $contact->save();

        $notification = array(
            'message' => 'Contact Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method
}
