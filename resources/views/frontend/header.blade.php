<section class="header">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('index')}}">Prince Yadav</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto nav-items">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-7 col-12">
                    <div class="name">
                        <p>{{ $header->short_title }}</p>
                        <h1>I'm <font color="#17d1ac">Prince</font> Yadav</h1>
                        <p class="details">{!! $header->description !!}</p>
                        <a href="{{ 'upload/file/' . $header->file }}" class="btn" target="_blank" data-id="{{ $header->id }}">Download CV</a>
                    </div>
                    <div class="icons d-flex my-4">
                        <a class="nav-link" href="{{ $header->linkedin }}" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a class="nav-link" href="{{ $header->github }}" target="_blank"><i
                                class="fab fa-github"></i></a>
                        <a class="nav-link" href="{{ $header->gitlab }}" target="_blank"><i
                                class="fab fa-gitlab"></i></a>
                        <a class="nav-link" href="{{ $header->skype }}" target="_blank"><i class="fab fa-skype"></i></a>
                        <a class="nav-link" href="{{ $header->whatsapp }}" target="_blank"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <img src="{{ !empty($header->image) ? url('upload/header_image/' . $header->image) : url('upload/no_image.jpg') }}"
                        alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="black-line"></div>
    </section>
</section>

{{-- jQuery for download --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.btn').click(function() {
            var header_id = $(this).attr('data-id');

            $.ajax({
                type: 'GET',
                url: "{{ route('counter') }}",
                data: {
                    id: header_id
                },
                success: function(data) {
                    $(".count" + header_id).text(data.headerCount);
                }
            });
        });
    });
</script>
