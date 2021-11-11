<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('storage/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('storage/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  {{-- Text editor --}}
  <link rel="stylesheet" href="{{ asset('storage/admin/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('storage/admin/dist/css/adminlte.min.css') }}">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('storage/admin/plugins/ekko-lightbox/ekko-lightbox.css') }}">
  {{-- Data table --}}
  <link rel="stylesheet" href="{{ asset('storage/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('storage/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('storage/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{  asset('storage/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.index') }}" class="nav-link">Home</a>
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
  <!-- /.navbar -->
  {{-- @yield('sidebar') --}}
  <!-- Main Sidebar Container -->



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->email }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.infos') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Informasi
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('admin.events') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Acara
                {{-- <span class="badge badge-info right">2</span> --}}
              {{-- </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Acara
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.activeEvents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Acara terkini
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.inActiveEvents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>History acara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.events') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua acara</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.destinations') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Wisata
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.videos') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Video
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.testimonis') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Testimoni
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.arts') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Kesenian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.users') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="nav-icon far fa-image"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('judul-content')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
              <li class="breadcrumb-item active">@yield('content-active')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  @yield('content')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('storage/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('storage/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('storage/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('storage/admin/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
{{-- Table --}}
<!-- DataTables  & Plugins -->
<script src="{{ asset('storage/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- jQuery Mapael -->
<script src="{{ asset('storage/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('storage/admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('storage/admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Text editor -->
<script src="{{ asset('storage/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Ekko Lightbox -->
<script src="{{ asset('storage/admin/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<!-- Filterizr-->
<script src="{{ asset('storage/admin/plugins/filterizr/jquery.filterizr.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('storage/admin/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('storage/admin/dist/js/pages/dashboard2.js') }}"></script>

<script>
    $(function () {
      
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
      $('#summernote').summernote({
        height: 150
      });
      $('#summernote1').summernote({
        height: 150
      });
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    });
  </script>
</body>
</html>