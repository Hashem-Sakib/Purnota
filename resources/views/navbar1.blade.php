<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.s0.1/css/ionicons.min.css">


    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    @yield('scripts')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('image/purnota.jpg')}}" alt="Purnota" height="60" width="60">
    </div>
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Logout</a>
                </li>
                </li>



            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('patients.create')}}" class="brand-link">
                {{-- <img src="AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" --}}
                <img src="{{asset('image/purnota.jpg')}}" class="brand-image img-circle elevation-3" alt="logo">

                <span class="brand-text font-weight-light">Purnata</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('image/Niloy.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Shahoriar Niloy</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>  --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

{{-- 
                        <li class="nav-item">
                            <a href="admission" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Dashboard

                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">

                            {{-- <a href="{{route('patients.create')}}" class="nav-link"> --}}
                                <a href="{{route('admissions.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>Admission

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('patients.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-bed"></i>
                                <p>Patients

                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('payments.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-cash-register"></i>
                                <p>Payments

                                </p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="{{route('visitors.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-person-booth"></i>
                                <p>Visitors

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('packages.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p>Packages

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employee.index')}}" class="nav-link">
                                <i class="nav-icon far fa-address-book"></i>
                                <p>Employees

                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>





    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    {{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}
    <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>





    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('title')</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">


      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row" >
            <div class="col-md-12 col sm-12 12">
              @yield('content')
            </div>
          </div>
        </div>
      </section>
    </div>


    
  </div>
</body>
@yield('footer')

</html>
