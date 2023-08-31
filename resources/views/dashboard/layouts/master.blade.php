<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="">
        <meta name="Author" content="My Dashboard">
        <meta name="Keywords" content=""/>
        @include('dashboard.layouts._header')
    </head>
    <body class="main-body bg-primary-transparent">
        @yield('content')
        @include('dashboard.layouts._footer')
        @include('dashboard.layouts._footer_scripts')
    </body>
</html>
