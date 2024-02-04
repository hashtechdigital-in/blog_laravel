<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>HI BLOG || ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{ url('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="{{ url('admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{ url('admin/assets/css/style.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('admin/admin_dashboard')}}">

                    <img src="{{ url('admin/assets/img/logo.png')}}" />
                </a>

            </div>
            <div class="right-div">
                <a href="{{ url('admin/logout')}}" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>


            <div class="right-div">
                <a href="{{ url('/')}}" class="btn btn-danger pull-right">View Website</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    @include('admin.layouts.admin_header');
     <!-- MENU SECTION END-->
   @yield('content')
     <!-- CONTENT-WRAPPER SECTION END-->
   @include('admin.layouts.admin_footer');
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{ url('admin/assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{ url('admin/assets/js/bootstrap.js')}}"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="{{ url('admin/assets/js/custom.js')}}"></script>
  
</body>
</html>
