<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" lang="{{ LaravelLocalization::getCurrentLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="800sat">
        <meta name="author" content="800sat">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <title>{{ LaravelLocalization::getCurrentLocale() === 'ar' ? setting()->site_name_ar:setting()->site_name_en }}</title>
        {{--        <title> @yield("title") </title>--}}
        <!-- Custom CSS -->
        <link href="{{ asset('dashboard/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dashboard/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dashboard/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="{{ asset('dashboard/dist/css/style.min.css') }}" rel="stylesheet">

        @stack('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
