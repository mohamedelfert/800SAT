<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ LaravelLocalization::getCurrentLocale() === 'ar' ? setting()->site_name_ar:setting()->site_name_en }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
