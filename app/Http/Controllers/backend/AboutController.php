<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        $about = About::find(1);
        return view('backend.about.about', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->title = $request->title;
        $about->short_title = $request->short_title;
        $about->description = $request->description;
        $about->hire_me = $request->hire_me;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/about/' . $about->image));
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/about'), $filename);
            $about['image'] = $filename;
        }

        $about->save();

        $notification = array(
            'message' => 'About Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method
}
