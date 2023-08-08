<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SchoolApp') }}</title>


    <link rel="stylesheet" href="{{ asset('public/css/app.css')}}">


    <link rel="stylesheet" href="{{ asset('public/admin/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('public/admin/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- dataTables -->
    <link rel="stylesheet" href="{{ asset('public/admin/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/responsive.bootstrap4.min.css')}}">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('public/admin/css/toastr.min.css')}}">

    <link rel="stylesheet" href="{{ asset('public/admin/css/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/adminlte.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('public/admin/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/summernote-bs4.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Scripts -->


</head>
<body class="sidebar-mini layout-fixed" style="height: auto;">

    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('public/admin/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">CEO (DEA)</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview">
                <a href="{{ url('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{ url('groups') }}" class="nav-link {{ request()->is('groups') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Group
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{ url('schools') }}" class="nav-link {{ request()->is('schools') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-building"></i>
                  <p>
                    School
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Widgets
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Charts
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ChartJS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Flot</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/inline.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inline</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Important</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Warning</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
        <div class="content-wrapper p-4">
        <!-- Main content -->

        <div id="app">
            <router-view></router-view>
        </div>

        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2022-2023 <a href="">Badar Munir</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


    <!-- js -->
    <script>
        var $_base  =   "{{  config('app.vue-name') }}";
    </script>
    <script src="{{ asset('public/admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/jquery-ui.min.js')}}"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('public/admin/js/bootstrap.bundle.min.js')}}"></script>
    <!-- dataTables -->
    <script src="{{ asset('public/admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/responsive.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('public/admin/js/Chart.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/sparkline.js')}}"></script>
    <script src="{{ asset('public/admin/js/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{ asset('public/admin/js/jquery.knob.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/moment.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/daterangepicker.js')}}"></script>
    <script src="{{ asset('public/admin/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/summernote-bs4.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/adminlte.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/dashboard.js')}}"></script>
    <script src="{{ asset('public/admin/js/demo.js')}}"></script>
    <script src="{{ asset('public/admin/js/toastr.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/custom.js')}}"></script>


    <script src="{{ asset('public/js/app.js') }}" defer></script>
</body>
</html>
