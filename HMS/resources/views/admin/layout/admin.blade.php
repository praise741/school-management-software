<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>

    <link href="{{ asset('storage/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('storage/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/css/plugins/steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{ asset('storage/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('storage/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet">
    @livewireStyles
@yield('style')
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="30vw" height="30vh" src={{ asset ( 'storage/images/'. Auth::user()->profile   ) }} />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">  <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <form action="/logout" method="POST">
                                    @csrf
                                <li><input type="submit" value="logout"></li>
                            </form>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>

                    <li>
                        <a href="/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="/admin">HOME</a></li>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="/admin/doctors/add"><i class="fa fa-spoon"></i> <span class="nav-label">Doctors</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/doctor">view doctors</a></li>
                            @if (Auth::user()->role == 'admin')
                            <li><a href="/admin/doctor/add">Add doctors</a></li>
                            @endif


                        </ul>
                    </li>
                    <li>
                        <a href="/admin/departments/add"><i class="fa fa-book"></i> <span class="nav-label">Departments</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/departments/add">Add departments</a></li>

                        </ul>
                    </li>


                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>


/

                <li>
                    <a href="login.html">
                         <form action="/logout" method="POST">
                            @csrf
                        <li><i class="fa fa-sign-out"></i><input type="submit" value="logout"></li>
                    </form>
                    </a>
                </li>

            </ul>

        </nav>
        </div>

        @yield('content')

@include

</body>
</html>

