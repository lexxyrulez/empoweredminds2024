<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Empowered Minds</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Empowered Minds" name="description" />
    <meta content="EmpoweredMinds" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>
</body>

@yield('content')

<!-- Vendor js -->
<script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

</body>
</html>
