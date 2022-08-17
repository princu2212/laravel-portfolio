<section class="about mb-3" id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 text-center">
                <img src="{{ !empty($about->image) ? url('upload/about/' . $about->image) : url('upload/no_image.jpg') }}"
                    alt="" srcset="">
            </div>
            <div class="col-md-5 col-12">
                <div class="about-text">
                    <h1>{{ $about->title }}</h1>
                    <h2>{{ $about->short_title }}</h2>
                    <p>{!! $about->description !!}</p>
                    <a href="#contact" class="btn mt-4">{{ $about->hire_me }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
