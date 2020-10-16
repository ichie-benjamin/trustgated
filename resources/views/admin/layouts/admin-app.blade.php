<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="{{ asset('bracket/img/bracket-social.png') }}">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="{{ asset('bracket/img/bracket-social.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('bracket/img/bracket-social.png') }}">
    <meta property="og:image:type" content="image/png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <!-- vendor css -->
{{--    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/js/all.min.js') }}"></script>

    <link href="{{ asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/chartist/chartist.css') }}" rel="stylesheet"> --}}
    @yield('style')
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">

    <style>
        .br-menu-item {
            height: 30px;
            letter-spacing: 0.1px;
            font-size: .65rem;
        }
        .br-menu-item .svg-inline--fa{
            width: 1.05em!important;
        }
    </style>


</head>

<body>

@include('admin.layouts.admin-sidenav')

<!-- ########## START: MAIN PANEL ########## -->
{{-- <div class="br-mainpanel"> --}}

    @yield('content')

  <footer class="br-footer">
    <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; 2020. {{ env('APP_NAME') }}. All Rights Reserved.</div>
    </div>

</footer>
{{-- </div><!-- br-mainpanel --> --}}
<!-- ########## END: MAIN PANEL ########## -->


    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('lib/moment/moment.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('lib/peity/jquery.peity.js') }}"></script>

    {{-- <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script> --}}

    {{-- <script src="{{ asset('lib/chartist/chartist.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('lib/d3/d3.js') }}"></script>
    <script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script> --}}

    <script src="{{ asset('js/bracket.js') }}"></script>

    {{-- <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script> --}}

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    $('#lfm').filemanager('image');
</script>

    @yield('js')

</body>
</html>
