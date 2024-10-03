<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{asset('asset/assets/vendors/mdi/css/materialdesignicons.min.css')}}>
    <link rel="stylesheet" href={{asset('asset/assets/vendors/ti-icons/css/themify-icons.css')}}>
    <link rel="stylesheet" href={{asset('asset/assets/vendors/css/vendor.bundle.base.css')}}>
    <link rel="stylesheet" href={{asset('asset/assets/vendors/font-awesome/css/font-awesome.min.css')}}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{asset('asset/assets/vendors/font-awesome/css/font-awesome.min.css')}} />
    <link rel="stylesheet" href={{asset('asset/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{asset('asset/assets/css/style.css')}}>
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{asset('asset/assets/images/favicon.png')}} />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-KisahSingkat" href="#"><img src="{{asset('asset/images/logo.svg')}}" alt="KisahSingkat" /></a>
          {{-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('asset/images/logo-mini.svg')}}" alt="logo" /></a> --}}
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              {{-- <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div> --}}
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
           
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
                 
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            {{-- <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="home">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Genre</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/romansa">Romansa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/horor">Horor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/fantasi">Fantasi</a>
                  </li>
                </ul>
              </div>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a>
                  </li>
                </ul>
              </div>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Genre</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="romansa">Romansa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="horor">Horor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="fantasi">Fantasi</a>
                  </li>
                </ul>
              </div>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                  </li>
                </ul>
              </div>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">About Us</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="tentangkami">Click here!</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-lock menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="login"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout"> Logout </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>

        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
          <!-- partial -->
        </div>

        <div class="container" style="margin-top: -8%">
          @yield('content')
        </div>

      </div>
        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src={{asset('asset/assets/vendors/js/vendor.bundle.base.js')}}></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src={{asset('asset/assets/vendors/chart.js/chart.umd.js')}}></script>
    <script src={{asset('asset/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src={{asset('asset/assets/js/off-canvas.js')}}></script>
    <script src={{asset('asset/assets/js/misc.js')}}></script>
    <script src={{asset('asset/assets/js/settings.js')}}></script>
    <script src={{asset('asset/assets/js/todolist.js')}}></script>
    <script src={{asset('asset/assets/js/jquery.cookie.js')}}></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>