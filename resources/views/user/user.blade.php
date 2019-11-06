@extends('layouts.masteruser')
@section('content')

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

<section class="content-header">
      <h1>
        Dashboard
        <small>MAIN MENU</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<!-- PINJAM BARANG -->
  <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="/formpinjamuser">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-log-out"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>PINJAM BARANG</strong></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- END PINJAM BARANG -->
        
        <!-- RIWAYAT PEMINJAMAN -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-time"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>RIWAYAT PEMINJAMAN</strong></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- END RIWAYAT PEMINJAMAN -->


        <!-- Syarat & Ketentuan -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="glyphicon glyphicon-question-sign"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>SYARAT & KETENTUAN</strong></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- END S&K -->
      </div>
    </section>

@endsection