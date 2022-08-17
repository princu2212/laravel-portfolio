<section class="project py-5" id="project">
    <div class="container">
        <h1 class="text-center">My Works</h1>
        <hr class="w-25 mx-auto">
        <div class="row py-3">
            @foreach ($project as $data)
                <div class="col-md-4 col-12 mb-3">
                    <div class="card">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @php
                                    $multiimg = App\Models\MultiImage::where('project_id', $data->id)->get();
                                @endphp
                                @foreach ($multiimg as $key => $item)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ !empty($item->image) ? url('upload/project_image/' . $item->image) : url('upload/no_image.jpg') }}"
                                            class="d-block w-100 h-75" alt="...">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $data->title }}</h4>
                            <p class="card-text">{!! $data->description !!}</p>
                        </div>
                        <div class="d-flex mx-auto mx-auto project-card-button">
                            <a target="_blank" href="{{ $data->view_site }}" class="btn">View Site</a>
                            <a target="_blank" href="{{ $data->source_code }}" class="btn">Source
                                Code</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
