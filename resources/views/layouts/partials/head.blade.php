<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Jobs Portal</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-180x180.png">

    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,300">-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon.css') }}">

{{--    <link href="{{ asset('assets/font/stylesheet.css') }}" rel="stylesheet" type="text/css" charset="utf-8" />--}}

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- MT ICONS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/mt-icons.css') }}">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery.fancybox.css') }}">

    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/settings.css') }}">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl.transitions.css') }}">

    <!-- MAGNIFY -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/magnify.css') }}">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/YTPlayer.css') }}">

    <!-- TEXT ROTATOR -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/simpletextrotator.css') }}">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css') }}">


    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages-style.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <style>

        ul.acc li {
            margin-top: 10px;
            margin-left: 4%;
            display: inline-block;
            width: 80px;
            height: 80px;
            overflow: hidden;
            /* line-height: 71px; */
            background:#fff;
            border-radius: 100%;
            border: 5px solid #017BC6;
            margin-right: 19%;
            margin-bottom: .5em;
            padding: 20px;
        }
        ul.acc li:hover {
            color:#fff;
            position: relative;
            background: rgba(234, 234, 234, 0.27);
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.19); }

        ul.acc li a {
            -webkit-transition-duration: 0.7s;
            -moz-transition-duration: 0.7s;
            -o-transition-duration: 0.7s;
            transition-duration: 0.7s;
            display: block;
            width: 100%;
            height: 200%;
            position: relative;
            color: #027BC4;

        }
        /*  ul.acc li a:after {
            text-align: center;
            position: absolute;
            width: inherit;
            height: 50%;
            left: 0;
            bottom: 0;
            line-height: 60px;
            color: #fff; }*/

    </style>

</head>
