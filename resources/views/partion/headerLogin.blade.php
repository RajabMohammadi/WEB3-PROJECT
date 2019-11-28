<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" />

    <!-- Custom Cs -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>

<body class="theme-blush" >