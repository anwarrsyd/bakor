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
<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
 
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="{{URL::to ('swal/dist/sweetalert.css')}}">
<script src="{{URL::to ('swal/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
function notifberhasil(){
swal("Sukses", "Input Absensi Berhasil!", "success")
}
</script>
</head>
<body>
 @if (Session::has('suksesabsen'))
   <script type="text/javascript">notifberhasil();</script>
   @endif
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>BAKOR</span>PEMANDU FTIf</a>
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
			<li class="active"><a href="{{URL::to('absensi')}}"><span class="glyphicon glyphicon-dashboard"></span> Form Absensi</a></li>
	    <li><a href="{{URL::to('izin')}}"><span class="glyphicon glyphicon-list-alt"></span> Form Izin Pemandu</a></li>
	    <li><a href="{{URL::to('rekapabsen')}}"><span class="glyphicon glyphicon-list-alt"></span>Data Absensi Pemandu</a></li>
	    <li><a href="{{URL::to('rekapizin')}}"><span class="glyphicon glyphicon-list-alt"></span>Data Izin Pemandu</a></li>
	       
		</ul>

	</div><!--/.sidebar -->
	  <div id="wrapper" style="margin-top: 10%;">
   
  <h1>Cek Kelengkapan & Absensi Pemandu </h1>
  <h1> Tanggal : <?php 		 date_default_timezone_set("Asia/jakarta");
echo date("d/m/Y");?></h1>
    <form action="{{URL::to('absen')}}" method="POST">

  <div class="col-2">
    <label>
      NRP
      <input placeholder="Masukan NRP !" id="name" name="nrp" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>
      Nama
      <input placeholder="Masukan Nama !" id="company" name="nama" tabindex="2">
    </label>
  </div>

  <div class="col-4">
    <label>Kemeja Polos</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch" name="kemeja" value="1"></center>
  </div>
   <div class="col-4">
    <label>Dasi / Jilbab</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"name="dasi" value="1"></center>
  </div>
  <div class="col-4">
    <label>Celana/Rok Hitam</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"name="celana" value="1"></center>
  </div>
  
   <div class="col-4">
    <label>Ikat Pinggang</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"name="sabuk" value="1"></center>
  </div>
   <div class="col-4">
    <label>Kaos Kaki Polos</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"name="kaos" value="1"></center>
  </div>
  <div class="col-4">
    <label>Rambut Rapi</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"name="rambut" value="1"></center>
  </div>
  <div class="col-4 switch">
    <label>ID Card</label>
    <center style="position:relative;margin-bottom:8px;"><input type="checkbox" class="js-switch"name="idcard" value="1"></center>
  </div>
  <div class="col-4 ">
  <label>Waktu</label>
    <label> <?php
    date_default_timezone_set("Asia/jakarta");
    echo date("h:i:sa");;?></label>
   
  </div>
 							{{csrf_field()}}

  <div class="col-submit">
    <button class="submitbtn">Submit</button>
  </div>
  
  </form>
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>

	
</body>
</html>
