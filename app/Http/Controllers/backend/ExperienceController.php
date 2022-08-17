<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function create()
    {
        return view('backend.experience.add');
    }

    public function store(Request $request)
    {
        $experience = new Experience();
        $experience->title = $request->title;
        $experience->period = $request->period;
        $experience->description = $request->description;

        $experience->save();

        $notification = array(
            'message' => 'Experience Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method

    public function show()
    {
        $experience = Experience::latest()->get();
        return view('backend.experience.view', compact('experience'));
    } // end method

    public function edit($id)
    {
        $experience = Experience::find($id);
        return view('backend.experience.edit', compact('experience'));
    } // end method

    public function update(Request $request, $id)
    {
        $experience = Experience::find($id);
        $experience->title = $request->title;
        $experience->period = $request->period;
        $experience->description = $request->description;

        $experience->save();

        $notification = array(
            'message' => 'Experience Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('experience.show')->with($notification);
    } // end method

    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();

        $notification = array(
            'message' => 'Experience Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('experience.show')->with($notification);
    } // end method
}
