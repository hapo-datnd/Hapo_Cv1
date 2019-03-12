<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <title>HapoCV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--<script src="{{ asset('js/app.js') }}" ></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-4.2.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css_cv/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css_cv/style.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css_cv/responsive.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




</head>
<body>
@include('cv.cv_layouts.header')
<div class="content flex flex-column">
    @include('cv.cv_layouts.professional')
    @include('cv.cv_layouts.skills')
    @include('cv.cv_layouts.experience')
    @include('cv.cv_layouts.portfolio')
</div>
<footer class="flex-column flex">
    @include('cv.cv_layouts.footer-top')
    <div class="footer-bottom flex-row flex justify-content-center align-items-center">
        <p class="p1">2019 Flatos.com All right reserved.</p>
    </div>
</footer>




<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="{{ asset('css/slick/slick.js') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>
</body>
</html>
