@extends('backend.main')
@section('title')
    Manage | Header
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Manage Header</h4>

                            <form method="post" action="{{ route('header.update', $header->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input name="short_title" value="{{ $header->short_title }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Long Title</label>
                                    <div class="col-sm-10">
                                        <input name="long_title" value="{{ $header->long_title }}" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description </label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="description">{{ $header->description }}</textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Resume File</label>
                                    <div class="col-sm-6">
                                        <input type="file" value="{{ $header->file }}" class="form-control"
                                            id="resume" name="resume">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
                                    <div class="col-sm-10">
                                        <input name="linkedin" value="{{ $header->linkedin }}" class="form-control"
                                            type="text" id="linkedin">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="github" class="col-sm-2 col-form-label">GitHub</label>
                                    <div class="col-sm-10">
                                        <input name="github" value="{{ $header->github }}" class="form-control"
                                            type="text" id="github">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="gitlab" class="col-sm-2 col-form-label">GitLab</label>
                                    <div class="col-sm-10">
                                        <input name="gitlab" value="{{ $header->gitlab }}" class="form-control"
                                            type="text" id="gitlab">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="whatsapp" class="col-sm-2 col-form-label">WhatsApp</label>
                                    <div class="col-sm-10">
                                        <input name="whatsapp" value="{{ $header->whatsapp }}" class="form-control"
                                            type="text" id="whatsapp">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="skype" class="col-sm-2 col-form-label">Skype</label>
                                    <div class="col-sm-10">
                                        <input name="skype" value="{{ $header->skype }}" class="form-control"
                                            type="text" id="skype">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="col-sm-4">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ !empty($header->image) ? url('upload/header_image/' . $header->image) : url('upload/no_image.jpg') }}" alt="Card image cap">
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
