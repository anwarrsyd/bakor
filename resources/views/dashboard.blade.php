<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bakor FTIf</title>
<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>BAKOR</span>Pemandu ftif</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Administrator <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{URL::to('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
		<li class="active"><a href="{{URL::to('dashboard')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
	     <li><a href="{{URL::to('absensi')}}"><span class="glyphicon glyphicon-dashboard"></span> Form Absensi</a></li>
	    <li ><a href="{{URL::to('izin')}}"><span class="glyphicon glyphicon-list-alt"></span> Form Izin Pemandu</a></li>
	    <li><a href="{{URL::to('rekapabsen')}}"><span class="glyphicon glyphicon-list-alt"></span>Data Absensi Pemandu</a></li>
	    <li><a href="{{URL::to('rekapizin')}}"><span class="glyphicon glyphicon-list-alt"></span>Data Izin Pemandu</a></li>
	       
		</ul>

	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard Tanggal : <?php  date_default_timezone_set("Asia/jakarta");
echo date("d/m/Y");?></h1>
			</div>
		</div><!--/.row-->
		
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div id="tampil_conference" class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-user glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$peserta}}</div>
							<div class="text-muted"><b>Pemandu yang telah absen</b></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div id="tampil_conference" class="col-sm-3 col-lg-5 widget-left"  style="background-color:red;">
							<em class="glyphicon glyphicon-user red glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$tervalidasi}}</div>
							<div class="text-muted"><b>Pemandu izin</b></div>
						</div>
					</div>
				</div>
			</div>
			
	
</body>
</html>
