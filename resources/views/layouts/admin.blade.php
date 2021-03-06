<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="../resource/views/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
<!--     <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
 -->
    <link href="{{asset('vendor/metisMenu.min.css')}}" rel="stylesheet">

    
    <!-- Custom CSS -->
<!--     <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
 -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="../vendor/morrisjs/morris.css" rel="stylesheet"> -->
    <link href="{{asset('vendor/morris.css')}}" rel="stylesheet">


    <!-- Custom Fonts -->
    <!-- <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 -->    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        @yield('styles')


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/
                ">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>                                               
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href=""><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
                        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.users.index')}}">All Users</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.users.create')}}">Create User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href=""><i class="fa fa-tasks fa-fw"></i> Advert.<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.advert.index')}}">All Adverts</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.advert.create')}}">Create Advert</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href=""><i class="fa   fa-align-left fa-fw"></i> Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.categories.index')}}">All Categories</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.categories.create')}}">Create Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                       <li>
                            <a href=""><i class="fa fa-comments fa-fw"></i> Comments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.comments.index')}}">All Comments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href=""><i class="fa  fa-file-picture-o fa-fw"></i> Photos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.media.index')}}">All Photos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        


         

    </div>
    </div>
    <div class="pull-right "  style="width: 86%">
        @yield('content')
        </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	@yield('scripts')
    <script src="{{asset('js/libs.js')}}"></script>
    <!-- <script src="../vendor/jquery/jquery.min.js"></script> -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>


    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <!-- <script src="../vendor/metisMenu/metisMenu.min.js"></script> -->
    <script src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>


    <!-- Morris Charts JavaScript -->
    <!-- <script src="../vendor/raphael/raphael.min.js"></script> -->
    <script src="{{asset('vendor/raphael/raphael.min.js')}}"></script>

    <!-- <script src="../vendor/morrisjs/morris.min.js"></script> -->
    <script src="{{asset('vendor/morrisjs/morris.min.js')}}"></script>

    <!-- <script src="../data/morris-data.js"></script> -->
    <script src="{{asset('data/morris-data.js')}}"></script>


    <!-- Custom Theme JavaScript -->
    <!-- <script src="../dist/js/sb-admin-2.js"></script> -->
    <script src="{{asset('js/sb-admin-2.js')}}"></script>




</body>

</html>
