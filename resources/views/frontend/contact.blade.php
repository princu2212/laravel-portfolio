@php
$contact = App\Models\Contact::find(1);
@endphp

<section class="contact" id="contact">
    <div class="container">
        <h1 class="text-center py-5">Get in touch</h1>
        <div class="row">
            <div class="col-md-6 col-12 contact-details">
                <h1>
                    <font color="#17d1ac">{{ $contact->name }}</font>
                </h1>
                <h6>Email: {{ $contact->email }}</h6>
                <h6>Mobile: {{ $contact->mobile }}</h6>
                <p>{{ $contact->address }}</p>
                <h5>Connect with me:</h5>
                <div class="icons d-flex px-0">
                    <a class="nav-link" href="{{ $contact->linkedin }}" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a class="nav-link" href="{{ $contact->github }}" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="nav-link" href="{{ $contact->gitlab }}" target="_blank"><i class="fab fa-gitlab"></i></a>
                    <a class="nav-link" href="{{ $contact->skype }}" target="_blank"><i class="fab fa-skype"></i></a>
                    <a class="nav-link" href="{{ $contact->whatsapp }}" target="_blank"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-12 contact-form">
                <form method="post" action="{{ route('message.store') }}">
                    @csrf
                    <div class="form-floating">
                        <input type="name" class="form-control" id="name" name="name"
                            placeholder="Enter Name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter Email" required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment" style="height: 100px"></textarea>
                        <label for="comment">Comment</label>
                    </div>
                    <button class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
