<section class="skill">
    <h1 class="text-center">Skills</h1>
    <hr class="w-25 mx-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-6 text-center skill-column">
                @foreach ($skill as $item)
                    <img
                        src="{{ !empty($item->image) ? url('upload/skill/' . $item->image) : url('upload/no_image.jpg') }}">
                @endforeach
            </div>
        </div>
    </div>
</section>
