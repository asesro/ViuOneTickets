<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>.:: ViuOne Tickets ::.</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('assets/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('assets/dist/css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.css')}}">
    <!--<link href="/assets/css/dataTables.bootstrap.css" rel="stylesheet">-->
    <link href="{{ asset('assets/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    {{--<link href="/assets/css/codemirror.min.css" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/codemirror.min.css')}}" rel="stylesheet">
    {{--<link href="/assets/css/monokai.min.css" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/monokai.min.css')}}" rel="stylesheet">
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>V</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>ViuOne</b>Tickets</span>
            <small>An Easy Way to Sales</small>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button  -- Comentariado para eliminar boton 1 -->
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-envelope-o"></i>--}}
                        {{--<span class="label label-success">4</span>--}}
                        {{--</a>--}}
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="{{ asset('assets/dist/img/avatar.png')}}" class="img-circle" alt="User Image"/>
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li><!-- end message -->
                                </ul><!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li><!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -- Comentariado para eleminar boton 2 -->
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-bell-o"></i>--}}
                        {{--<span class="label label-warning">10</span>--}}
                        {{--</a>--}}
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li><!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -- Comentariado para eliminar boton 3 -->
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-flag-o"></i>--}}
                        {{--<span class="label label-danger">9</span>--}}
                        {{--</a>--}}
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs" >{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                                <p>
                                    {{--Usuario - Web Developer--}}
                                    <small>Keep It Simple</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            {{--<li class="user-body">--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Followers</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Sales</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Friends</a>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            {{--<div class="user-panel">--}}
                {{--<div class="pull-left image">--}}
                    {{--<img src="/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />--}}
                {{--</div>--}}
                {{--<div class="pull-left info">--}}
                    {{--@if (Auth::guest())--}}
                    {{--@else--}}
                        {{--<p>{{ Auth::user()->name }}</p>--}}
                        {{--<a href="#"><i class="fa fa-circle text-success"></i></a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Tickets</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Tickets</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('tickets')}}"><i class="fa fa-circle-o"></i> Listar Tickets Abiertos</a></li>
                        <li><a href="{{ url('tickets/complete')}}"><i class="fa fa-circle-o"></i> Listar Tickets Cerrados</a></li>
                        <li><a href="{{ url('tickets/create')}}"><i class="fa fa-circle-o"></i> Ingresar Tickets</a></li>
                        {{--<li><a href="/contenidos"><i class="fa fa-circle-o"></i>Asignar Tickets</a></li>--}}
                        {{--<li><a href="index2.html"><i class="fa fa-circle-o"></i>Seguimiento Tickets</a></li>--}}
                    </ul>
                </li>
                <li class="header">Sucursales</li>
                <li>
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Sucursales</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Listar Sucursales</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Actualizar Sucursales</a></li>
                        {{--<li><a href="/contenidos"><i class="fa fa-circle-o"></i>Asignar Tickets</a></li>--}}
                        {{--<li><a href="index2.html"><i class="fa fa-circle-o"></i>Seguimiento Tickets</a></li>--}}
                    </ul>
                </li>
                {{--<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>--}}
                {{--<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>--}}
                {{--<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>--}}
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @yield('content')
                </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            {{--An Easy Way to Sales--}}
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">A&E SOFT</a></strong>
    </footer>

    <!-- Control Sidebar -->
    {{--<aside class="control-sidebar control-sidebar-dark">--}}
        {{--<!-- Create the tabs -->--}}
        {{--<ul class="nav nav-tabs nav-justified control-sidebar-tabs">--}}
            {{--<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>--}}
            {{--<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>--}}
        {{--</ul>--}}
        {{--<!-- Tab panes -->--}}
        {{--<div class="tab-content">--}}
            {{--<!-- Home tab content -->--}}
            {{--<div class="tab-pane active" id="control-sidebar-home-tab">--}}
                {{--<h3 class="control-sidebar-heading">Recent Activity</h3>--}}
                {{--<ul class='control-sidebar-menu'>--}}
                    {{--<li>--}}
                        {{--<a href='javascript:'>--}}
                            {{--<i class="menu-icon fa fa-birthday-cake bg-red"></i>--}}
                            {{--<div class="menu-info">--}}
                                {{--<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>--}}
                                {{--<p>Will be 23 on April 24th</p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul><!-- /.control-sidebar-menu -->--}}

                {{--<h3 class="control-sidebar-heading">Tasks Progress</h3>--}}
                {{--<ul class='control-sidebar-menu'>--}}
                    {{--<li>--}}
                        {{--<a href='#'>--}}
                            {{--<h4 class="control-sidebar-subheading">--}}
                                {{--Custom Template Design--}}
                                {{--<span class="label label-danger pull-right">70%</span>--}}
                            {{--</h4>--}}
                            {{--<div class="progress progress-xxs">--}}
                                {{--<div class="progress-bar progress-bar-danger" style="width: 70%"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul><!-- /.control-sidebar-menu -->--}}

            {{--</div><!-- /.tab-pane -->--}}
            {{--<!-- Stats tab content -->--}}
            {{--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->--}}
            {{--<!-- Settings tab content -->--}}
            {{--<div class="tab-pane" id="control-sidebar-settings-tab">--}}
                {{--<form method="post">--}}
                    {{--<h3 class="control-sidebar-heading">General Settings</h3>--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="control-sidebar-subheading">--}}
                            {{--Report panel usage--}}
                            {{--<input type="checkbox" class="pull-right" checked />--}}
                        {{--</label>--}}
                        {{--<p>--}}
                            {{--Some information about this general settings option--}}
                        {{--</p>--}}
                    {{--</div><!-- /.form-group -->--}}
                {{--</form>--}}
            {{--</div><!-- /.tab-pane -->--}}
        {{--</div>--}}
    {{--</aside><!-- /.control-sidebar -->--}}
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class='control-sidebar-bg'></div>
</div><!-- ./wrapper -->


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- JavaScripts -->

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
<script>
    $( ".deleteit" ).click(function( event ) {
        event.preventDefault();
        if (confirm("Are you sure you want to delete the status: " + $(this).attr("node") + " ?"))
        {
            $form = $(this).attr("form");
            $("#" + $form).submit();
        }

    });
</script>

@yield('footer')

        <!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
{{--<script src="/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>--}}
<!-- Bootstrap 3.3.2 JS -->
{{--<script src="/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>--}}
<!-- DATA TABES SCRIPT -->
{{--<script src="/assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>--}}
<!-- SlimScroll -->
<script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{asset('assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/app.min.js')}}" type="text/javascript"></script>

@yield('scripts')

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
</body>
</html>