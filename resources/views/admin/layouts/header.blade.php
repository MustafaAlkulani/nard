<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ !empty($title)?$title :trans('admin.adminpenel')  }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->

    @if(direction()== 'ltr')
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/AdminLTE.min.css">
    @else  <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/rtl/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/rtl/AdminLTE.min.css">

        <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/rtl/rtl.css">
        <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/fonts/fonts-fa.css">
        @endif

        <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="{{url('/')}}/desing/adminpenel/dist/js/myfunction.js"></script>

    <script src="{{url('/')}}/desing/adminpenel/plugins/sweetAlert/sweet.js"></script>
    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/plugins/sweetAlert/sweet.css">

@yield('header')
        <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
