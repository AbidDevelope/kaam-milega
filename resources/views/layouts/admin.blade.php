<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <title>ICVA</title> -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @stack('style')
    <style>
    .card-primary .card-header{
    background-color: #007bff;
    color: #fff !important;
    background: linear-gradient(
    45deg
    ,#303f9f,#7b1fa2);
    box-shadow: 3px 3px 15px 0 rgb(123 31 162 / 50%);
    }
    .main-sidebar.sidebar-dark-primary.elevation-4{
    background: #081A51;
    }
    .main-sidebar .info a{
    color: #fff;
    }
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #ffffff;
    color: #081a51;
    font-weight: 600;
    }
    .nav-sidebar {
    gap: 0.5rem;
    }
    .navbar-nav.ml-auto .text-white{
    color: #fff;
    padding: 10px;
    text-align: center;
    font-family: var(--primary-font);
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
    background: #d5313d;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-color: #d5313d;
    }
    .navbar-nav.ml-auto .text-white .fas{
    padding-right: 8px;
    }
    .content-wrapper .dt-button,
    .btn.btn-info{
    padding: 7px 20px !important;
    border-radius: 4px !important;
    background: #005bba !important;
    color: #fff!important;
    border-color: #005bba !important;
    font-size: 1.6rem;
    box-shadow: none !important ;
    padding-top: 7px;
    font-size: 17px;
    margin-bottom: 15px;
    }
    /*.content-wrapper .dt-button:hover,.content-wrapper .dt-button:focus, .dataTables_wrapper .dataTables_paginate .paginate_button:hover,.dataTables_wrapper .dataTables_paginate .paginate_button:focus,.btn.btn-info:hover,.btn.btn-info:focus{
    background-color: #0b5ed7 !important;
    border-color: #0a58ca !important;
    font-weight: 500 !important;
    }*/
    .content-wrapper .dt-button span{
    font-weight: 500 !important;
    }
    .content-wrapper .btn-warning{
    background: #005bba !important;
    color: #fff!important;
    border-color: #005bba !important;
    }
    /*.dataTables_wrapper .dataTables_paginate .paginate_button.current{
    background: #081a51 !important;
    color: #fff !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
    color: #fff !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled{
    opacity: 0.7 !important;
    }*/
    .card-header:first-child{
    background-color: #081a51;
    color: #fff;
    }
    </style>
  </head>
  <body class="sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link btn btn-dark text-white" data-widget="control-sidebar" data-slide="true" href="{{ route('logout') }}"
              onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <!--  <a href="{{ route('home') }}" class="brand-link" style="padding: .8125rem 2.5rem;">
          
        </a> -->
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="nav-item">
              <i class="nav-icon far fa-user-circle" style="color: #eaeaea; font-size: 34px;"></i>
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
              <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link  @if (Request::segment(1) == 'home' && Request::segment(2) == '') {{ 'active' }} @endif">
                  
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              
                <li class="nav-item @if (Request::segment(2) == 'banners') {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (Request::segment(2) == 'banners') {{ 'active' }} @endif">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Home Page
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(in_array('banners',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/banners') }}" class="nav-link @if (Request::segment(2) == 'banners') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Banner</p>
                    </a>
                  </li>
                  @endif
                </ul>
              </li>
              <li class="nav-item @if (Request::segment(2) == 'job-seeker') {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (Request::segment(2) == 'job-seeker') {{ 'active' }} @endif">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Job Seeker
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(in_array('job-seeker',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/job-seeker') }}" class="nav-link @if (Request::segment(2) == 'job-seeker') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Job Seeker</p>
                    </a>
                  </li>
                  @endif
                </ul>
              </li>
              <li class="nav-item @if (Request::segment(2) == 'reviews') {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (Request::segment(2) == 'reviews') {{ 'active' }} @endif">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Reviews
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(in_array('reviews',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/reviews') }}" class="nav-link @if (Request::segment(2) == 'reviews') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reviews</p>
                    </a>
                  </li>
                  @endif
                </ul>
              </li>
              <li class="nav-item @if (Request::segment(2) == 'learning-videos') {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (Request::segment(2) == 'learning-videos') {{ 'active' }} @endif">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Learning Videos
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(in_array('learning-videos',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/learning-videos') }}" class="nav-link @if (Request::segment(2) == 'learning-videos') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Learning Videos</p>
                    </a>
                  </li>
                  @endif
                </ul>
              </li>
              <li class="nav-item @if (Request::segment(2) == 'faqs') {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (Request::segment(2) == 'faqs') {{ 'active' }} @endif">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Faqs
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(in_array('faqs',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/faqs') }}" class="nav-link @if (Request::segment(2) == 'faqs') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Faqs</p>
                    </a>
                  </li>
                  @endif
                </ul>
              </li>
              <li class="nav-item @if (Request::segment(2) == 'recruiters') {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (Request::segment(2) == 'recruiters') {{ 'active' }} @endif">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Recruiters
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(in_array('recruiters',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/recruiters') }}" class="nav-link @if (Request::segment(2) == 'recruiters') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recruiters</p>
                    </a>
                  </li>
                  @endif
                </ul>
              </li>
              <li class="nav-item @if (Request::segment(2) == 'states' || Request::segment(2) == 'district' || Request::segment(2) == 'education-level' || Request::segment(2) == 'job-category' || Request::segment(2) == 'job-title' || Request::segment(2) == 'skills' ) {{ 'menu-open' }} @endif">
                <a href="#" class="nav-link @if (Request::segment(2) == 'states' || Request::segment(2) == 'district' || Request::segment(2) == 'education-level' || Request::segment(2) == 'job-category' || Request::segment(2) == 'job-title' || Request::segment(2) == 'skills') {{ 'active' }} @endif">
                  
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dropdown Page
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @if(in_array('states',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/states') }}" class="nav-link @if (Request::segment(2) == 'states') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>State List</p>
                    </a>
                  </li>
                  @endif
                  @if(in_array('districts',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/district') }}" class="nav-link @if (Request::segment(2) == 'district') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>City List</p>
                    </a>
                  </li>
                  @endif
                  @if(in_array('education_levels',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/education-level') }}" class="nav-link @if (Request::segment(2) == 'education-level') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Education Level</p>
                    </a>
                  </li>
                  @endif
                  @if(in_array('job_categories',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/job-category') }}" class="nav-link @if (Request::segment(2) == 'job-category') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Job Category</p>
                    </a>
                  </li>
                  @endif
                  @if(in_array('job_titles',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/job-title') }}" class="nav-link @if (Request::segment(2) == 'job-title') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Job Types</p>
                    </a>
                  </li>
                  @endif
                  @if(in_array('skills',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/skills') }}" class="nav-link @if (Request::segment(2) == 'skills') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Skills</p>
                    </a>
                  </li>
                  @endif
                   
                </ul>
              </li>
              @if(in_array('otps',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
                  <li class="nav-item">
                    <a href="{{ url('/admin/otp') }}" class="nav-link @if (Request::segment(2) == 'otp') {{ 'active' }} @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Otp List</p>
                    </a>
                  </li>
                  @endif
              
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
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  @yield('right-btn')
                  </div><!-- /.col -->
                  </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <div class="content">
                  <div class="container-fluid">
                    <div class="row">
                      @yield('content')
                    </div>
                    <!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>
                  <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer">
                  <!--<div class="float-right d-none d-sm-block">-->
                  <!--<b>Version</b> 3.2.0-->
                  <!--</div>-->
                  <!-- <strong><a href="https://www.ivca.in/">dum.in</a>.</strong> All rights reserved. -->
                </footer>
              </div>
              <!-- ./wrapper -->
              <!-- REQUIRED SCRIPTS -->
              <!-- jQuery -->
              <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
              <!-- Bootstrap 4 -->
              <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
              <!-- AdminLTE App -->
              <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
              @stack('scripts')
            </body>
          </html>