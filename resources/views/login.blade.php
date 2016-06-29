<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
   <title>Bakor FTIf</title>
<link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="{{URL::to ('aset/css/reset.css')}}">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="{{URL::to ('aset/css/style.css')}}">

    
<link rel="stylesheet" type="text/css" href="{{URL::to ('swal/dist/sweetalert.css')}}">
<script src="{{URL::to ('swal/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
function notifberhasil(){
swal("Sukses", "Registrasi berhasil!", "success")
}
function notifgagal(){
  swal("Gagal", "Email yang anda masukan sudah digunakan silahkan gunakan alamat email yang lain. Hubungi panitia apabila tidak dapat melakukan registrasi .", "error")
}
function gagal(){
  swal("Gagal", "Login anda gagal silahkan masukan kembali password dan username anda.", "error")
}
</script>
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div style="margin-left: 40%; margin-top:5%;">
  <img src="{{URL::to ('dev.png')}}"  style="height:200px; ">
</div>
<div class="pen-title"  >
  <h1>Login Absensi BAKOR PEMANDU FTIf</h1>
</div>

  @if (Session::has('sukses'))
   <script type="text/javascript">notifberhasil();</script>
  @elseif (Session::has('gagal'))
  <script type="text/javascript">notifgagal();</script>
   @elseif (Session::has('message'))
  <script type="text/javascript">gagal();</script>
  @endif

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="{{URL::to('login')}}" method="POST">
      <div class="input-container">
        <input type="text" id="email" name="username" required="required"/>
        <label for="Email">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
       {{csrf_field()}}
      <div class="button-container">
        
        <button><span>Login</span></button>
      
    </form>
  </div>
  
  </div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="{{URL::to ('aset/js/index.js')}}"></script>

    
    
    
  </body>
</html>
