<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bakor FTIf</title>
<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{URL::to ('aset/css/reset.css')}}">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="{{URL::to ('aset/css/style.css')}}">
         <link rel="stylesheet" type="text/css" href="{{URL::to ('swal/dist/sweetalert.css')}}">
<script src="{{URL::to ('swal/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
function notifberhasil(){
swal("Sukses", "Input Surat Izin Berhasil!", "success")
}
</script>

</head>
<body>
 @if (Session::has('suksesizin'))
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
				<a class="navbar-brand" href="#"><span>BAKOR</span>Pemandu FTIf</a>
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
				<li class=""><a href="{{URL::to('dashboard')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>

			<li><a href="{{URL::to('absensi')}}"><span class="glyphicon glyphicon-dashboard"></span> Form Absensi</a></li>
	    <li class="active"><a href="{{URL::to('izin')}}"><span class="glyphicon glyphicon-list-alt"></span> Form Izin Pemandu</a></li>
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
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		<div class="pen-title"  >
  <h1>Formulir Izin Meninggalkan Area Pelatihan</h1>
</div>
<form action="{{URL::to('izin/izin')}}" method="POST">
			
			<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Form</h1>
    
      <div class="input-container">
        <input type="text" id="email" name="nrp" required="required"/>
        <label for="Email">NRP</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Password" name="nama" required="required"/>
        <label for="Password">Nama</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">

        <input type="time" id="Password" name="jamkembali" required="required"/>
        <label >Jam kembali</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="texe" id="Password" name="alasan" required="required"/>
        <label for="Password">Alasan</label>
        <div class="bar"></div>
      </div>
     
       {{csrf_field()}}
      <div class="button-container">
        
        <button><span>Submit</span></button>
      
    </form>
  </div>
	
</body>
</html>
