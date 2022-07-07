<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- :: Required Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- :: Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front-end') }}/css/bootstrap.min.css">

    <!-- :: Title -->
    <title>
        @yield('title')
    </title>
    <!-- :: Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">

    <!-- :: Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/front-end') }}/fonts/fontawesome/css/all.min.css">

    <!-- :: Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front-end') }}/css/nice-select.css">

    <!-- :: Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front-end') }}/css/style.css">

    <!-- :: Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front-end') }}/css/responsive.css">

    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body>

    <!-- :: Header -->
    @include('layouts.front-end.partials._header')

    <!-- :: Header -->
    {{--  @include('layouts.front-end.partials._modals')  --}}


    <!-- :: Category -->
    <div class="category">
        <div class="container">
            @yield('content')

        </div>
    </div>



    <!-- :: Footer -->
    @include('layouts.front-end.partials._footer')

    <!-- :: JavaScript Files -->
    <!-- :: jQuery JS -->
    <script src="{{ asset('assets/front-end') }}/js/jquery-3.6.0.min.js"></script>

    <!-- :: Bootstrap JS Bundle With Popper JS -->
    <script src="{{ asset('assets/front-end') }}/js/bootstrap.bundle.min.js"></script>

    <!-- :: Nice Select -->
    <script src="{{ asset('assets/front-end') }}/js/jquery.nice-select.min.js"></script>

    <!-- :: Main JS -->
    <script src="{{ asset('assets/front-end') }}/js/main.js"></script>
</body>

</html>
