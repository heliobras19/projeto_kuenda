<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title') </title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Favicons -->
    <link href="/images/logo-nav.png" rel="icon">
    <link href="/images/logo-nav.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/niceadmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="/niceadmin/assets/css/style.css" rel="stylesheet">
    <script src="/ckeditor/ckeditor.js"></script>

    @vite(['resources/js/app.js'])

</head>

<body>
    @include('layouts.components.header')
    @include('layouts.components.nav')

    <main id="main" class="main">
        @yield('content')
    </main>
    @include('layouts.components.footer')

    <!-- Vendor JS Files -->
    <script src="/niceadmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/niceadmin/assets/vendor/chart.js/chart.min.js"></script>
    <script src="/niceadmin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/niceadmin/assets/vendor/quill/quill.min.js"></script>
    <script src="/niceadmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/niceadmin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/niceadmin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/niceadmin/assets/js/main.js"></script>

</body>

</html>
