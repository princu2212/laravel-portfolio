<section class="experience">
    <h1 class="text-center pt-3">Experience</h1>
    <hr class="w-25 mx-auto">
    <div class="container">
        <div class="row">
            @foreach ($experience as $item)
                <div class="col-md-6 col-12 mb-3">
                    <div class="card shadow">
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->period }}</p>
                        <p>{!! $item->description !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Education Section -->
    <section class="education">
        <div class="container">
            <div class="card shadow rounded">
                <h3 class="text-center pt-3">Education</h3>
                <hr class="w-25 mx-auto mt-0">
                <div class="row">
                    <div class="col-12">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Bachelor's Degree of Computer Science
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <large>University: Chhattisgarh Swami Vivekanand Technical University,
                                            Bhilai</large><br>
                                        <large>College: MM College of Technology, Raipur Chhattisgarh</large><br>
                                        <small>Session - 2016-2020</small><br>
                                        <small>Percentage - 68.15%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        School Education
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <large>Govt. Higher Secondary School Godhi, Raipur Chhattisgarh</large>
                                                <br>
                                                <large>12th: Science Stream</large><br>
                                                <small>Session - 2015-2016</small><br>
                                                <small>Percentage - 50%</small>
                                            </div>
                                            <div class="col-md-6 col-12 mx-auto">
                                                <large>Govt. Higher Secondary School Godhi, Raipur Chhattisgarh</large>
                                                <br>
                                                <large>10th: General Study</large><br>
                                                <small>Session - 2013-2014</small><br>
                                                <small>Percentage - 55%</small>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
