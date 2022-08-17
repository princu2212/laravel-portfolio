@extends('backend.main')
@section('title')
    Edit | Project
@endsection
@section('content')
    <div class="page-content pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Project</h4>

                            <form method="post" action="{{ route('project.update', $project->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Project Name</label>
                                    <div class="col-sm-10">
                                        <input name="title" value="{{ $project->title }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Project Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="description">{{ $project->description }}</textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="view_site" class="col-sm-2 col-form-label">Site Link</label>
                                    <div class="col-sm-10">
                                        <input name="view_site" value="{{ $project->view_site }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="source_code" class="col-sm-2 col-form-label">Source Code</label>
                                    <div class="col-sm-10">
                                        <input name="source_code" value="{{ $project->source_code }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Submit">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <div class="page-content pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Project Screenshot</h4>

                            <form method="post" action="{{ route('project.multiimage.update', $project->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3 mt-5">
                                    @foreach ($multiImgs as $img)
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top img-fluid"
                                                    src="{{ !empty($img->image) ? url('upload/project_image/' . $img->image) : url('upload/no_image.jpg') }}"
                                                    alt="Card image cap" style="width:280px; height:130px;">
                                                <div class="card-body">
                                                    <a href="{{ route('project.multiimage.destroy', $img->id) }}"
                                                        class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i
                                                            class="fa fa-trash"></i></a>
                                                    <p class="card-text">
                                                    <div class="form-group">
                                                        <label for="change Image" class="form-control-label">Change
                                                            Image <span class="text-danger">*</span></label>
                                                        <input type="file" id="image"
                                                            name="multi_img[{{ $img->id }}]" class="form-control">
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Submit">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
