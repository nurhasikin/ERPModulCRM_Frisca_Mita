<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT.Ciputra Development Tbk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@yield('css')
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
      
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PT.Ciputra.Tbk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
         
        </div>
      

          <!-- Sidebar Menu -->
          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <a href="{{url('beranda/')}}" class="nav-link">
                  <i class="fas fa-person-list"></i>
                  <p>
                     Beranda
                    
                  </p>
                </a>

               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-person-list"></i>
                  <p>
                     CRM
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('pelanggan/')}}" class="nav-link">
                      <i class="fas fa-clipboard-list"></i>
                      <p>DATA PELANGGAN</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('pembelian/')}}" class="nav-link">
                      <i class="fas fa-clipboard"></i>
                      <p>DATA PENJUALAN</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('kinerjasales/')}}" class="nav-link">
                      <i class="fas fa-clipboard"></i>
                      <p>DATA KINERJA Tim Sales</p>
                    </a>
                  </li> 
                </ul>
                </nav>
                <!-- /.sidebar-menu -->
                {{--  --------------Frisca Mita---------------  --}}
           
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item has-treeview">
                   <a href="#" class="nav-link">
                     <i class="fas fa-person-list"></i>
                     <p>
                        HRM
                       <i class="right fas fa-angle-left"></i>
                     </p>
                   </a>
                   <ul class="nav nav-treeview">
                     <li class="nav-item">
                       <a href="{{url('absensi/')}}" class="nav-link">
                         <i class="fas fa-clipboard-list"></i>
                         <p>Data Absensi</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="{{url('gaji/')}}" class="nav-link">
                         <i class="fas fa-clipboard"></i>
                         <p>Data Gaji</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="{{url('karyawan/')}}" class="nav-link">
                         <i class="fas fa-clipboard"></i>
                         <p>Data Karyawan</p>
                       </a>
                     </li>
                     <li class="nav-item">
                      <a href="{{url('kontrak/')}}" class="nav-link">
                        <i class="fas fa-clipboard"></i>
                        <p>Data Kontrak</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('training/')}}" class="nav-link">
                        <i class="fas fa-clipboard"></i>
                        <p>Data Training</p>
                      </a>
                    </li>
                   </ul>
                  
              {{--  ------------ALDO EGIT-----------  --}}
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-person-list"></i>
                  <p>
                     Sales And Marketing
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('order/')}}" class="nav-link">
                      <i class="fas fa-clipboard-list"></i>
                      <p>DATA ORDER</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('promo/')}}" class="nav-link">
                      <i class="fas fa-percent"></i>
                      <p>DATA PROMO</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('invoice/')}}" class="nav-link">
                      <i class="fas fa-clipboard"></i>
                      <p>DATA INVOICE</p>
                    </a>
                  </li>
        </ul>
      </nav>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
         <a href="http://localhost:8080/finance_ERP/dashboard" class="nav-link">
           <i class="fas fa-person-list"></i>
           <p>
              Financial Accounting
         
           </p>
         </a>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('judul')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('judul')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">@yield('judul')</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          @yield('content')
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="http://adminlte.io">Customer Relationship Management</a>.</strong> PT.Ciputra Development Tbk.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
@yield('js')
</body>
</html>
