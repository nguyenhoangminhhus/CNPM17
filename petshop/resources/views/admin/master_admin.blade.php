<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <!-- Meta, title, CSS, favicons, etc. -->
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>Shop Pet Corner / Phụ kiện chó - mèo</title>
	    <base href="{{asset('')}}">

	    <!-- Bootstrap -->
	    <link href="Admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Font Awesome -->
	    <link href="Admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <!-- NProgress -->
	    <link href="Admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
	    <!-- iCheck -->
	    <link href="Admin_asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	    <!-- bootstrap-progressbar -->
	    <link href="Admin_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	    <!-- bootstrap-daterangepicker -->
	    <link href="Admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		<!-- Select2 -->
		<link href="Admin_asset/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
 		<!-- Bootstrap Colorpicker -->
  		<link href="Admin_asset/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  		<!-- Switchery -->
    	<link href="Admin_asset/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    	<!-- Animate.css -->
    	<link href="Admin_asset/vendors/animate.css/animate.min.css" rel="stylesheet">
    	<!-- Datatables -->
	    <link href="Admin_asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	    <link href="Admin_asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	    <link href="Admin_asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	    <link href="Admin_asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	    <link href="Admin_asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

	    <!-- Custom Theme Style -->
	    <link href="Admin_asset/css/custom.css" rel="stylesheet">
  	</head>

  	<body class="nav-md">
	    <div class="container body">
	      <div class="main_container">
	        @include('admin.header_admin')

	        @yield('content')

	        @include('admin.footer_admin')
	      </div>
	    </div>

	    <!-- jQuery -->
	    <script src="Admin_asset/vendors/jquery/dist/jquery.min.js"></script>
	    <!-- Bootstrap -->
	    <script src="Admin_asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- FastClick -->
	    <script src="Admin_asset/vendors/fastclick/lib/fastclick.js"></script>
	    <!-- NProgress -->
	    <script src="Admin_asset/vendors/nprogress/nprogress.js"></script>
	    <!-- Chart.js -->
	    <script src="Admin_asset/vendors/Chart.js/dist/Chart.min.js"></script>
	    <!-- gauge.js -->
	    <script src="Admin_asset/vendors/gauge.js/dist/gauge.min.js"></script>
	    <!-- bootstrap-progressbar -->
	    <script src="Admin_asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	    <!-- iCheck -->
	    <script src="Admin_asset/vendors/iCheck/icheck.min.js"></script>
	    <!-- DateJS -->
	    <script src="Admin_asset/vendors/DateJS/build/date.js"></script>
	    <!-- bootstrap-daterangepicker -->
	    <script src="Admin_asset/vendors/moment/min/moment.min.js"></script>
	    <script src="Admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	    <!-- jQuery Tags Input -->
	    <script src="Admin_asset/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	    <!-- Select2 -->
	    <script src="Admin_asset/vendors/select2/dist/js/select2.full.min.js"></script>
	    <!-- Parsley -->
	    <script src="Admin_asset/vendors/parsleyjs/dist/parsley.min.js"></script>
	    <!-- Autosize -->
	    <script src="Admin_asset/vendors/autosize/dist/autosize.min.js"></script>
	    <!-- jQuery autocomplete -->
	    <script src="Admin_asset/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	    <!-- Bootstrap Colorpicker -->
	    <script src="Admin_asset/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	    <!-- morris.js -->
    	<script src="Admin_asset/vendors/raphael/raphael.min.js"></script>
   		<script src="Admin_asset/vendors/morris.js/morris.min.js"></script>
   		<!-- Datatables -->
	    <script src="Admin_asset/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	    <script src="Admin_asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	    <script src="Admin_asset/vendors/jszip/dist/jszip.min.js"></script>
	    <script src="Admin_asset/vendors/pdfmake/build/pdfmake.min.js"></script>
	    <script src="Admin_asset/vendors/pdfmake/build/vfs_fonts.js"></script>

	    <!-- Custom Theme Scripts -->
	    <script src="Admin_asset/js/custom.js"></script>
	
  	</body>
</html>