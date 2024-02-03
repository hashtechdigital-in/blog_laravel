<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hi Blog - Home</title>
	<link rel="icon" href="{{ url('front/img/Fevicon.png') }}" type="image/png">

  <link rel="stylesheet" href="{{ url('front/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/vendors/owl-carousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ url('front/css/style.css') }}">
</head>
<body>
  <!--================Header Menu Area =================-->
  @include('front.layouts.header')
  <!--================Header Menu Area =================-->
  
  @yield('content')

  <!--================ Start Footer Area =================-->
  @include('front.layouts.footer')
  <!--================ End Footer Area =================-->

  <script src="{{ url('front/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ url('front/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('front/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('front/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ url('front/js/mail-script.js') }}"></script>
  <script src="{{ url('front/js/main.js') }}"></script>
</body>
</html>