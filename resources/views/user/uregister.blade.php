<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-box-body">
      <div class="register-logo">
        <b>INVENTARIS</b>App
      </div>
      <p class="login-box-msg">Register a new membership</p>

      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
     </div>
     @endif

     @if(session('gagal'))
     <div class="alert alert-danger" role="alert">
       {{session('gagal')}}
     </div>
     @endif

     <form action="/registrasi/registrasipost" method="post">
      {{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="namauser">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
          <div>
            <select class="form-control" style="width: 100%;" name="kelas">
                @foreach($pilihkelas as $pk)
                <option value="{{$pk->id_kelas}}">{{$pk->tingkat_kelas}}</option>
                @endforeach
            </select>
          </div>
      </div>

      <div class="form-group has-feedback">
          <div>
            <select class="form-control" style="width: 100%;" name="jurusan">
                @foreach($pilihjurusan as $pj)
                <option value="{{$pj->id_jurusan}}">{{$pj->nama_jurusan}}</option>
                @endforeach
            </select>
          </div>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

        <div class="form-group has-feedback">
        <input type="hidden" class="form-control" placeholder="Password" name="_token" value="{{ csrf_token()}}">
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" value="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Retype password" name="confirmation" value="">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback" hidden="">
          <div>
            <select class="form-control" style="width: 10 0%;" name="level">
                <option value="2"></option>
            </select>
          </div>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat" style="margin-bottom: 2%">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="/ulogin" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 3 -->
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="assets/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
