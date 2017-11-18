<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ERP UNAB</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{ request()->root() }}/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>RP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ERP</b> UNAB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ request()->root() }}/theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Byron Oyarzún</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ request()->root() }}/theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ request()->root() }}/theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Byron Oyarzún</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ PRINCIPAL</li>
        <li class="{{ request()->is('home') ? 'active':'' }}">
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="{{ request()->is('inventario') ? 'active':'' }}"><a href="{{ route('inventario') }}"><i class="fa fa-book"></i> <span>Inventario</span></a></li>
        <li class="{{ request()->is('ventas') ? 'active':'' }}"><a href="{{ route('ventas') }}"><i class="fa  fa-line-chart"></i> <span>Ventas</span></a></li>
        <li class="{{ request()->is('usuarios') ? 'active':'' }}"><a href="{{ route('usuarios') }}"><i class="fa fa-users"></i> <span>Gestión de usuarios</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ ucfirst(request()->path()) }}
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ ucfirst(request()->path()) }}</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('contenido')
    <section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2017 - ERP UNAB</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<script src="{{ request()->root() }}/theme/bower_components/jquery/dist/jquery.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ request()->root() }}/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/raphael/raphael.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/morris.js/morris.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="{{ request()->root() }}/theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ request()->root() }}/theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/moment/min/moment.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="{{ request()->root() }}/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ request()->root() }}/theme/bower_components/fastclick/lib/fastclick.js"></script>
<script src="{{ request()->root() }}/theme/dist/js/adminlte.min.js"></script>
<script src="{{ request()->root() }}/theme/dist/js/pages/dashboard.js"></script>
<script src="{{ request()->root() }}/theme/dist/js/demo.js"></script>
</body>
</html>
