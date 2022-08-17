@extends('backend.main')
@section('title')
    Manage | About
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Manage About</h4>

                            <form method="post" action="{{ route('about.update', $about->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" value="{{ $about->title }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="short_title" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input name="short_title" value="{{ $about->short_title }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="description">{{ $about->description }}</textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="hire_me" class="col-sm-2 col-form-label">Hire Me</label>
                                    <div class="col-sm-10">
                                        <input name="hire_me" value="{{ $about->hire_me }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="col-sm-4">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ !empty($about->image) ? url('upload/about/' . $about->image) : url('upload/no_image.jpg') }}" alt="Card image cap">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
