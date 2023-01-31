<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Prince Yadav</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>

    <!-- Header Page -->
    @include('frontend.header')

    <!-- About Page -->
    @include('frontend.about')

    <!-- Skill Page -->
    @include('frontend.skill')

    <!-- Experience Page -->
    @include('frontend.experience')

    <!-- Project Page -->
    @include('frontend.project')

    <!-- Contact Page -->
    @include('frontend.contact')

    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="{{ asset('frontend/js/JQuery3.3.1.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
</body>

</html>
