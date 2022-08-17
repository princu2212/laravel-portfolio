<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('backend.project.add');
    }

    public function store(Request $request)
    {

        $project = Project::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'view_site' => $request->view_site,
            'source_code' => $request->source_code,
            'created_at' => Carbon::now(),
        ]);

        /* Project Screenshot insert */
        $images = $request->file('multi_img');
        foreach ($images as $img) {
            $make_name = $img->getClientOriginalName();
            $img->move(public_path('upload/project_image'), $make_name);

            MultiImage::insert([
                'project_id' => $project,
                'image' => $make_name,
                'created_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'Project Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function show()
    {
        $project = Project::latest()->get();
        return view('backend.project.view', compact('project'));
    } // end method

    public function edit($id)
    {
        $project = Project::find($id);
        $multiImgs = MultiImage::where('project_id', $id)->get();
        return view('backend.project.edit', compact('project', 'multiImgs'));
    } // end method

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->view_site = $request->view_site;
        $project->source_code = $request->source_code;

        $project->save();

        $notification = array(
            'message' => 'project Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method

    public function MultiImageUpdate(Request $request, $id)
    {
        $imgs = $request->multi_img;

        foreach ($imgs as $id => $img) {
            $imgDel = MultiImage::findOrFail($id);
            @unlink(public_path('upload/project_image/' . $imgDel->image));
            $make_name = $img->getClientOriginalName();
            $img->move(public_path('upload/project_image'), $make_name);

            MultiImage::where('id', $id)->update([
                'image' => $make_name,
                'updated_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Multi Image Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } // end method

    public function MultiImageDelete($id)
    {
        $oldimg = MultiImage::findOrFail($id);
        @unlink(public_path('upload/project_image/' . $oldimg->image));
        MultiImage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {

        $project = Project::find($id);
        $project->delete();

        $images = MultiImage::where('project_id', $id)->get();
        foreach ($images as $img) {
            @unlink(public_path('upload/project_image/' . $img->image));
            MultiImage::where('project_id', $id)->delete();
        }

        $notification = array(
            'message' => 'Project Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('project.show')->with($notification);
    } // end method
}
