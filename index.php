<?php
    include "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library Management System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo baseurl('assets/lte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo baseurl('assets/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo baseurl('assets/lte/dist/css/adminlte.min.css'); ?>">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php //echo baseurl();?>assets/lte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>Preloader -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
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
      <!-- Navbar Search
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
      </li> -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start 
            <div class="media">
              <img src="<?php echo baseurl();?>assets/lte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
             Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="<?php echo baseurl();?>assets/lte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
             
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
           Message Start 
            <div class="media">
              <img src="<?php echo baseurl();?>assets/lte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
             Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">lihat semua pesan</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">10</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">10 Notifikasi</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 5 pesan baru
            <span class="float-right text-muted text-sm">3 menit</span>
          </a>
          
      
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-retweet mr-2"></i> 5 pengembalian
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">lihat semua notifikasi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo baseurl();?>assets/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LIBRARY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo baseurl();?>assets/lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo baseurl();?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo baseurl("?p=anggota");?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Data Anggota</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo baseurl("?p=buku");?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Data Buku</p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="<?php echo baseurl();?>" class="nav-link">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>Log Out</p>
            </a>
          </li>
          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php 
      if(empty($_GET["p"])){
        include "modul/dashboard.php";
      }else{
        include "modul/$_GET[p].php";
      }
      
    ?>
  </div>
  <!-- /.content-wrapper -->

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
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo baseurl();?>assets/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo baseurl();?>assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo baseurl();?>assets/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo baseurl();?>assets/lte/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo baseurl();?>assets/lte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo baseurl();?>assets/lte/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo baseurl();?>assets/lte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo baseurl();?>assets/lte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo baseurl();?>assets/lte/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes 
<script src="<?php //echo baseurl();?>assets/lte/dist/js/demo.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo baseurl();?>assets/lte/dist/js/pages/dashboard2.js"></script>
</body>
</html>
