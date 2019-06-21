<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="@if(isset($body_id)){{ $body_id }}@endif">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
@include('components.header')

@yield('header')
@yield('content')
@include('components.footer')
@include('components.city_change_block')
@include('components.order_form')
<script>
    document.addEventListener('DOMContentLoaded', function(){
        setTimeout(function(){
            $("head").append("<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,300,300italic,900&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>");
            $("head").append("<link href='https://fonts.googleapis.com/css?family=Kurale' rel='stylesheet' type='text/css'>");
        }, 0);
    });
</script>
<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/translations/messages_ru.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('js')
</body>
</html>