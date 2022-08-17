<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function create()
    {
        return view('backend.skill.add');
    }

    public function store(Request $request)
    {
        $skill = new Skill();

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/skill/' . $skill->image));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload/skill'), $filename);
            $skill['image'] = $filename;
        }

        $skill->save();

        $notification = array(
            'message' => 'Skill Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method

    public function show()
    {
        $skill = Skill::latest()->get();
        return view('backend.skill.view', compact('skill'));
    } // end method

    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('backend.skill.edit', compact('skill'));
    } // end method

    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/skill/' . $skill->image));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload/skill'), $filename);
            $skill['image'] = $filename;
        }

        $skill->save();

        $notification = array(
            'message' => 'Skill Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill.show')->with($notification);
    } // end method

    public function destroy($id)
    {
        $skill = Skill::find($id);
        @unlink(public_path('upload/skill/' . $skill->image));
        $skill->delete();

        $notification = array(
            'message' => 'Skill Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('skill.show')->with($notification);
    } // end method
}
