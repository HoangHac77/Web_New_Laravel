<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="magz, html5, css3, template, magazine template">
    <!-- Shareable -->
    <meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
    <meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
    <title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('client/scripts/bootstrap/bootstrap.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('client/scripts/ionicons/css/ionicons.min.css') }}"">
    <!-- Toast -->
    <link rel="stylesheet" href="{{ asset('client/scripts/toast/jquery.toast.min.css') }}">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="{{ asset('client/scripts/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/scripts/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('client/scripts/magnific-popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('client/scripts/sweetalert/dist/sweetalert.css') }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/skins/all.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/demo.css') }}">

    {{-- css bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    {{-- js bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> --}}
</head>

<body class="skin-orange">
    {{-- Header --}}
    @include('layouts.header')
    {{-- End Header --}}

    @yield('content')

    <!-- Start footer -->
    @include('layouts.footer')
    <!-- End Footer -->

    <!-- JS -->
    <script src="{{ asset('client/js/jquery.js') }}"></script>
    <script src="{{ asset('client/js/jquery.migrate.js') }}"></script>
    <script src="{{ asset('client/scripts/bootstrap/bootstrap.min.js') }}"></script>
    <script>
        var $target_end = $(".best-of-the-week");
    </script>
    <script src="{{ asset('client/scripts/jquery-number/jquery.number.min.js') }}"></script>
    <script src="{{ asset('client/scripts/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/scripts/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/scripts/easescroll/jquery.easeScroll.js') }}"></script>
    <script src="{{ asset('client/scripts/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('client/scripts/toast/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('client/js/demo.js') }}"></script>
    <script src="{{ asset('client/js/e-magz.js') }}"></script>
</body>

</html>
