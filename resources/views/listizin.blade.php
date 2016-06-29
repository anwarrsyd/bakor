<?php $i=1; ?>
<?php $s = 0; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bakor FTIf</title>
<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
<link href="{{URL::to ('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::to ('assets/css/styles.css')}}" rel="stylesheet">
<script src="{{URL::to('assets/js/jquery-1.11.2.min.js')}}"></script>
<link href="{{URL::to ('assets/plugin/datatables/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<script src="{{URL::to ('assets/plugin/datatables/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::to ('assets/plugin/datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{URL::to ('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to ('assets/plugin/TT/js/dataTables.tableTools.js')}}"></script>
<link href="{{URL::to ('assets/plugin/TT/css/dataTables.tableTools.css')}}" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="{{URL::to ('swal/dist/sweetalert.css')}}">
 <script src="{{URL::to ('swal/dist/sweetalert.min.js')}}"></script>
<script>
	$(document).ready(function(){
        $(function(){
            var table = $('#buku').dataTable();
            var tt = new $.fn.dataTable.TableTools( table );
 
    		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
        });
    });
</script>
<script type="text/javascript">
	function notifkeren(){
	swal("Sukses", "Peserta berhasil dihapus", "success")
}

</script>


</script>	
</head>
<body>
 @if (Session::has('messagesuksesdelete'))
			  <script type="text/javascript">notifkeren();</script>
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
				<a class="navbar-brand" href="#"><span>BAKOR</span>PEMANDU FTIF</a>
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
	    <li><a href="{{URL::to('izin')}}"><span class="glyphicon glyphicon-list-alt"></span> Form Izin Pemandu</a></li>
	    <li><a href="{{URL::to('rekapabsen')}}"><span class="glyphicon glyphicon-list-alt"></span>Data Absensi Pemandu</a></li>
	    <li class="active"><a href="{{URL::to('rekapizin')}}"><span class="glyphicon glyphicon-list-alt"></span>Data Izin Pemandu</a></li>



		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
				<li class="active">Peserta</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Rekap Izin  Pemandu</h1>
					 
				</div>
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Peserta Terdaftar</div>
						<div class="panel-body">
							<table class="table" id="buku">
							<thead>
								<th>No</th>
								<th>NRP</th>
								<th>Nama</th>
								<th>Jam Keluar</th>
								<th>Jam Kembali</th>
								<th>Alasan</th>
								<th>Tanggal</th>
								
							</thead>
							<tbody>
								@foreach($peserta as $post)
								<tr>
								<td><?php echo $i; $i++; ?></td>
								<td>
									{{$post->nrp}}</td>
								<td>{{$post->nama}}</td>
								<td>{{$post->jamkeluar}}</td>	
								<td>{{$post->jamkembali}}</td>
								<td>{{$post->alasan}}</td>
								<td>{{$post->tanggal}}</td>
								
								</tr>
								@endforeach
							</tbody>
						</table>
						</div>
					</div>
				</div>
		</div><!--/.row-->
		</div><!--/.row-->
	</div>	<!--/.main-->
</body>
