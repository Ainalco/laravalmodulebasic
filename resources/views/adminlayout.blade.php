<!DOCTYPE html>
<html lang="en">

<head>
    @include('adminhead');
    @stack('css')
</head>

<body class="hold-transition sidebar-mini pace-done sidebar-collapse">
  <!-- Site wrapper -->
  <div class="wrapper">
  <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please Wait...</p>
            </div>
        </div>
        <script>
		$(document).ready(function()
		{
			
			setTimeout(function () {
                $('.page-loader-wrapper').fadeOut();
            }, 2000);
			
		});
        
        </script>
        <header class="main-header">
        <!--topheader-->
        @include('admintopbar');
        </header>
    
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
                <!-- sidebar -->
                @include('adminsidebar'); 
    </aside>
   

    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <div class="content" style="padding-top:30px;">
    @yield('content')
  </div>
      <!-- Content Header (Page header) -->
      <!-- <section class="content-header">
        <div class="header-icon"><i class="pe-7s-close"></i></div>
        <div class="header-title">
          <h1>Blank page</h1>
          <small>it all starts here</small>
          <ol class="breadcrumb">
            <li><a href="index.html">This is</a></li>
            <li class="active">Breadcrumb</li>
          </ol>
        </div>
      </section> -->
      <!-- Main content -->
      
    </div> <!-- /.content-wrapper -->
    
    
    <footer class="main-footer">
      <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
      ©Copyright by lobolong مطعم Restora POS
    </footer>
  </div> <!-- ./wrapper -->
  @include('adminfooter');
  @stack('js')
  
</body>

</html>