@extends('backend.main')
@section('title')
    Manage | Contact
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Manage Contact</h4>

                            <form method="post" action="{{ route('contact.update', $contact->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" value="{{ $contact->name }}" class="form-control"
                                            type="text" id="name">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" value="{{ $contact->email }}" class="form-control"
                                            type="text" id="email">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="mobile" class="col-sm-2 col-form-label">Mobile No.</label>
                                    <div class="col-sm-10">
                                        <input name="mobile" value="{{ $contact->mobile }}" class="form-control"
                                            type="text" id="mobile">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" value="{{ $contact->address }}" class="form-control"
                                            type="text" id="address">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
                                    <div class="col-sm-10">
                                        <input name="linkedin" value="{{ $contact->linkedin }}" class="form-control"
                                            type="text" id="linkedin">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="github" class="col-sm-2 col-form-label">GitHub</label>
                                    <div class="col-sm-10">
                                        <input name="github" value="{{ $contact->github }}" class="form-control"
                                            type="text" id="github">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="gitlab" class="col-sm-2 col-form-label">GitLab</label>
                                    <div class="col-sm-10">
                                        <input name="gitlab" value="{{ $contact->gitlab }}" class="form-control"
                                            type="text" id="gitlab">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="skype" class="col-sm-2 col-form-label">Skype</label>
                                    <div class="col-sm-10">
                                        <input name="skype" value="{{ $contact->skype }}" class="form-control"
                                            type="text" id="skype">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="whatsapp" class="col-sm-2 col-form-label">WhatsApp</label>
                                    <div class="col-sm-10">
                                        <input name="whatsapp" value="{{ $contact->whatsapp }}" class="form-control"
                                            type="text" id="whatsapp">
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
@endsection
