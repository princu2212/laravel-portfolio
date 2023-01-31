@extends('backend.main')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Resume Downloads</p>
                                    @php
                                        $totalCount = App\Models\Header::sum('count');
                                    @endphp
                                    <h4 class="mb-2">{{ $totalCount }}</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-user-3-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <a href="{{ route('message.create') }}">
                                        <p class="text-truncate font-size-14 mb-2">Messages</p>
                                        @php
                                            $message = App\Models\Message::get();
                                        @endphp
                                        <h4 class="mb-2">{{ count($message) }}</h4>
                                    </a>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-mail-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    @endsection
