<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Admin Dashboard | Empowered Minds</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('dashboard/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="{{ asset('dashboard/css/lib/calendar2/semantic.ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                stroke-miterlimit="10" />
        </svg>
    </div>


    @yield('content')


    <!-- All Jquery -->
    <script src="{{ asset('dashboard/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dashboard/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dashboard/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dashboard/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
    {{-- <script src="{{ asset('dashboard/js/lib/morris-chart/raphael-min.js') }}"></script>
    <script src="{{ asset('dashboard/js/lib/morris-chart/morris.js') }}"></script>
    <script src="{{ asset('dashboard/js/lib/morris-chart/dashboard1-init.js') }}"></script> --}}


    <script src="{{ asset('dashboard/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('dashboard/js/lib/calendar-2/semantic.ui.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('dashboard/js/lib/calendar-2/prism.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('dashboard/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('dashboard/js/lib/calendar-2/pignose.init.js') }}"></script>

    <script src="{{ asset('dashboard/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
    <!-- scripit init-->

    <script src="{{ asset('dashboard/js/custom.min.js') }}"></script>

</body>

</html>
