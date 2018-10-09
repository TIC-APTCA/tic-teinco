<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,TEINCO,Template,Open,Source,jQuery,CSS,HTML,Dashboard">

    <title>{{ config('app.name') }}</title>
    
    <!-- Icons-->
    <link href="{{ asset('admin_coreui/dist/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_coreui/dist/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_coreui/dist/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_coreui/dist/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    
    <!-- Main styles for this application-->
    <link href="{{ asset('admin_coreui/dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_coreui/dist/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">

    @yield('content')

    <!-- Bootstrap and necessary plugins-->
    <script src="{{ asset('admin_coreui/dist/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_coreui/dist/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_coreui/dist/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_coreui/dist/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('admin_coreui/dist/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin_coreui/dist/vendors/@coreui/coreui/js/coreui.min.js') }}"></script>
  </body>
</html>