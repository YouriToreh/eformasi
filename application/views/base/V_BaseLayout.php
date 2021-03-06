<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=base_url('')?>assets/images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url('')?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('')?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('')?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url('')?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url('')?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url('')?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url('')?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url('')?>assets/build/css/custom.min.css" rel="stylesheet">

        <!-- Datatables -->
    
    <link href="<?=base_url('')?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('')?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('')?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('')?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('')?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  



  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela! </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url('')?>assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, </span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php $this->load->view('base/V_SideBar')?>  
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php $this->load->view('base/V_TopNav')?> 
        <!-- /top navigation -->

        <!-- page content -->
        <?php (isset($page_content)) ? $this->load->view($page_content) : ''?>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<script>
      function divLoaderNavy(message = 'Loading'){
    return '<div class="col-12 text-center" style="height: 200%;" ><div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status"> <span class="sr-only">Loading...</span></div>'+
    '<div class="spinner-grow text-danger"  style="width: 3rem; height: 3rem;" role="status"> <span class="sr-only">Loading...</span></div>'+
    '<div class="spinner-grow text-success" style="width: 3rem; height: 3rem;" role="status"> <span class="sr-only">Loading...</span></div>'+
    '<div class="spinner-grow text-warning" style="width: 3rem; height: 3rem;" role="status"> <span class="sr-only">Loading...</span></div></div>'
  }

  function successtoast(message = ''){
    const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: timertoast
    });

    Toast.fire({
      icon: 'success',
      title: message
    })
  }
</script>

    <!-- jQuery -->
    <script src="<?=base_url('')?>assets/vendors/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?=base_url('')?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url('')?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url('')?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url('')?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?=base_url('')?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url('')?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url('')?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=base_url('')?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=base_url('')?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url('')?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url('')?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url('')?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url('')?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url('')?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url('')?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=base_url('')?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url('')?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?=base_url('')?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=base_url('')?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url('')?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url('')?>assets/build/js/custom.min.js"></script>

      <!-- Datatables -->
      <script src="<?=base_url('')?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url('')?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url('')?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
	
  </body>
</html>
