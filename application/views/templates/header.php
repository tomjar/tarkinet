<html>
        <head>
                <title>Tarkinet</title>
				<meta charset="utf-8">
				<meta http-equiv="x-ua-compatible" content="ie=edge">
				<title></title>
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="icon" href="<?php echo site_url('/'); ?>../favicon.ico" type="image/x-icon">
				<link rel="apple-touch-icon" href="apple-touch-icon.png">

				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/normalize.css">
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/main.css">
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/bootstrap.css">
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/bootstrap-theme.min.css" >
				<!-- datatables css -->
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/jquery.dataTables.min.css" >
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/buttons.dataTables.min.css" >
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/colReorder.dataTables.min.css" >
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/select.dataTables.min.css" >
				<link rel="stylesheet" href="<?php echo site_url('/'); ?>../css/jquery-ui.css" >
				<!-- scripts -->
				<script src="<?php echo site_url('/'); ?>../js/jquery-1.12.0.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/vendor/modernizr-2.8.3.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/bootstrap.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/jquery-ui.js"></script>
				<!-- datatables js -->
				<script src="<?php echo site_url('/'); ?>../js/jszip.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/pdfmake.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/vfs_fonts.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/jquery.dataTables.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/dataTables.buttons.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/buttons.colVis.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/buttons.html5.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/buttons.print.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/dataTables.colReorder.min.js"></script>
				<script src="<?php echo site_url('/'); ?>../js/dataTables.select.min.js"></script>
				

        </head>
		<div class="col-lg-12">
			<img src="<?php echo site_url('/'); ?>../images/logo_1.png">
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-12">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo site_url('home/'); ?>">Tarkinet</a>
				</div>
				<ul class="nav navbar-nav">
				  <li><a href="<?php echo site_url('companies/'); ?>">Companies</a></li>
				  <li><a href="<?php echo site_url('bills/'); ?>">Bills</a></li>
				  <li><a href="#">TODO: Journal Entries page</a></li>
				</ul>
			  </div>
			</nav>
		</div>
        <body>
			<div class="col-lg-12">
            <h1><?php echo $title; ?></h1>