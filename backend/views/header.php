<?php
    include_once __DIR__ . "/../../common/src/Service/SecurityService.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SUPERMART | AdminLTE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <style>
        img{
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
    <?php if (SecurityService::isAuthorized()): ?>
  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?model=product&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?model=product&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Products</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/?model=category&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?model=category&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?model=category&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/?model=shop&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Shops
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?model=shop&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Shop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?model=shop&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Shop</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/?model=news&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?model=news&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create news</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?model=news&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List news</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/?model=order&action=read" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?model=order&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?model=order&action=read" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List orders</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
  </aside>
     <?php endif; ?>