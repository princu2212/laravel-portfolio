<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function create()
    {
        $header = Header::find(1);
        return view('backend.header.header', compact('header'));
    }

    public function update(Request $request, $id)
    {
        $header = Header::find($id);
        $header->short_title = $request->short_title;
        $header->long_title = $request->long_title;
        $header->description = $request->description;
        $header->linkedin = $request->linkedin;
        $header->github = $request->github;
        $header->gitlab = $request->gitlab;
        $header->whatsapp = $request->whatsapp;
        $header->skype = $request->skype;

        if ($request->file('resume')) {
            $file = $request->file('resume');
            @unlink(public_path('upload/file/' . $header->file));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload/file'), $filename);
            $header['file'] = $filename;
        }

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/header_image/' . $header->image));
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/header_image'), $filename);
            $header['image'] = $filename;
        }

        $header->save();

        $notification = array(
            'message' => 'Header Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method
}
