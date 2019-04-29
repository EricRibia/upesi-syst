
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="./img/favicon.png"  type="image/x-icon">
  <title>Upesi Money Transfer</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      {{-- <li>
        <p>Upesi money transfer</p>
      </li> --}}
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input v-model="search" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
    {{-- <div>
      <p>Upesi money transfer</p>
    </div> --}}

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="./img/favicon.png" alt="Larapp Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"></br>
      <span class="brand-text font-weight-light">Upesi Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/boy.svg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
          <p style="color:#fff" href="#" class="d-block">{{Auth::user()->type}}</p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <router-link to="/dashboard" class="nav-link">
                  <i class="fa fa-tachometer"></i>
                  <p>
                    Dashboard
                  </p>
                </router-link>
              </li>
              <li>
              <a href="{{url ('/')}}" target="_blank" class="nav-link">
                <i class="fa fa-external-link"></i>
                <p>
                  View Frontend
                </p>
              </a>
            </li>
              <li>
              <a href="{{url ('/formsubmissions')}}" class="nav-link">
                <i class="fa fa-file-text"></i>
                <p>
                  Contact forms
                </p>
              </a>
            </li>
          {{-- @canany(['isAdmin', 'isAuthor']) --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cogs"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/edit-about" class="nav-link">
                    <i class="fas fa-globe"></i>
                  <p>About us</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/edit-services" class="nav-link">
                    <i class="fas fa-globe"></i>
                  <p>Services</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/edit-policies" class="nav-link">
                    <i class="fas fa-globe"></i>
                  <p>FAQs and Policies</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/edit-team" class="nav-link">
                  <i class="fas fa-circle"></i>
                  <p>Team</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/edit-slider" class="nav-link">
                  <i class="fas fa-circle"></i>
                  <p>Slider images</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/edit-partners" class="nav-link">
                  <i class="fas fa-circle"></i>
                  <p>Our Partners section</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/edit-careers" class="nav-link">
                  <i class="fas fa-circle"></i>
                  <p>Careers</p>
                </router-link>
              </li>
              
            </ul>
          </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cogs"></i>
              <p>
                Countries
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/edit-countries" class="nav-link">
                    <i class="fas fa-globe"></i>
                  <p>Create page</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/edit-payments" class="nav-link">
                    <i class="fas fa-globe"></i>
                  <p>Add payments</p>
                </router-link>
              </li>
              
            </ul>
          </li>
          {{-- @endcanany --}}
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cogs"></i>
              <p>
                Sections
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                    <i class="fas fa-users"></i>
                  <p>Slider</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                    <i class="fas fa-users"></i>
                  <p>How it works</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                    <i class="fas fa-users"></i>
                  <p>Footer</p>
                </router-link>
              </li>
             
              <li class="nav-item">
                <router-link to="/developer" class="nav-link">
                  <i class="fas fa-circle"></i>
                  <p>Send money to</p>
                </router-link>
              </li>
              
            </ul>
          </li> --}}
          <li class="nav-item">
              <router-link to="/edit-works" class="nav-link">
                <i class="fa fa-tasks"></i>
                <p>How it works</p>
              </router-link>
            </li>
          <li class="nav-item">
              <router-link to="/users" class="nav-link">
                <i class="fa fa-shield"></i>
                <p>Manage users</p>
              </router-link>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off"></i>
            <p>
                {{ __('Logout') }}
            </p> 

         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <router-view></router-view>

            <vue-progress-bar></vue-progress-bar>
        </div>
      </section>
</div>



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    {{-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> --}}
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 - Upesi Money Transfer</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@auth
  <script>
      window.user = @json(auth()->user());
  </script>  
@endauth
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
