<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ !empty($title)?$title :'رفقاء وطن'  }}</title>

    <!-- Google Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->



    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{url('Desing/style/')}}/css/animate.css">
    <link href="{{url('Desing/style/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('Desing/style/')}}/css/font-awesome.min.css">

    <link href="{{url('Desing/style/')}}/css/prettyPhoto.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/rtl/bootstrap-rtl.min.css">
    <link href="{{url('Desing/style/')}}/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{url('Desing/style/')}}/css/css/stylenews.css">
@if(lang()=='ar')
      <link rel="stylesheet" href="{{url('/')}}/desing/adminpenel/dist/css/rtl/bootstrap-rtl.min.css">
    @endif

@yield('header')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>
<body  style="background-color: #fbfafa">