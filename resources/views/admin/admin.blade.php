@extends('layouts.master')

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



 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">SIDEBAR MENU</li>

        <!-- DASHBOARD -->
        <li class="active treeview">
          <a href="{{ url('/admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- END DASHBOARD -->

        <!-- DAFTAR BARANG -->
        <li>
          <a href="/daftarbarang">
            <i class="fa fa-cubes"></i><span>Daftar Barang</span>
          </a>
        </li>
        <!-- END DAFTAR BARANG -->

        <!-- DAFTAR JENIS BARANG -->
        <li>
          <a href="/daftarjenis">
            <i class="fa fa-cube"></i> <span>Daftar Jenis Barang</span>
          </a>
        </li>
        <!-- END DAFTAR JENIS BARANG -->

        <!-- DAFTAR RUANGAN -->
        <li>
          <a href="/daftarruang">
            <i class="fa fa-th"></i> <span>Daftar Ruangan</span>
          </a>
        </li>
        <!-- END DAFTAR RUANGAN -->

        <!-- DAFTAR PENGGUNA -->
        <li>
          <a href="/daftaruser">
            <i class="fa fa-users"></i> <span>Daftar Pengguna</span>
          </a>
        </li>
        <!-- END DAFTAR PENGGUNA -->

        <!-- DAFTAR PETUGAS -->
        <li>
          <a href="#">
            <i class="fa fa-user"></i> <span>Daftar Petugas</span>
          </a>
        </li>
        <!-- END DAFTAR PETUGAS -->

        <!-- GENERATE REPORT -->
        <li>
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Generate Report</span>
          </a>
        </li>
        <!-- END GENERATE REPORT -->


    </section>
    <!-- END SIDEBAR -->
  </aside>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>
          
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- MAIN CONTENT -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">

        <!-- PINJAM BARANG -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="/formpinjam">
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

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-stats"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>STATISTIK PEMINJAMAN</strong></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END MAIN MENU -->

      <!-- DAFTAR PEMINJAM -->
            <section class="content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box">
                    <div class="box-header">
                      <h3><b>Data Peminjam</b></h3>
                    </div>

                    <div class="box-body" style="overflow-x: auto;">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr style="font-size: 13px; font-weight: bold;">
                            <th style="text-align: center;" hidden="">ID Peminjaman</th>
                            <th style="text-align:center;">Waktu Pinjam</th>
                            <th style="text-align:center;">Nama Peminjam</th>
                            <th style="text-align:center;">Kelas</th>
                            <th style="text-align:center;">Jurusan</th>
                            <th style="text-align:center;">Nama Barang</th>
                            <th style="text-align:center;">Jenis Barang</th>
                            <th style="text-align:center;">Kuantitas</th>
                            <th style="text-align:center;">Ruangan</th>
                            <th style="text-align:center;">Nama Petugas</th>
                            <th style="text-align:center;">Status</th>
                            <th style="text-align:center;">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($data_peminjam as $dp)
                        <tr>
                          <td style="text-align:center;" hidden="">{{$dp->id_peminjaman}}</td>
                          <td style="text-align:center;">{{$dp->waktupinjam}}</td>
                          <td style="text-align:center;">{{$dp->nama_user}}</td>
                          <td style="text-align:center;">{{$dp->tingkat_kelas}}</td>
                          <td style="text-align:center;">{{$dp->nama_jurusan}}</td>
                          <td style="text-align:center;">{{$dp->nama_barang}}</td>
                          <td style="text-align:center;">{{$dp->nama_jenis}}</td>
                          <td style="text-align:center;">{{$dp->kuantitas}}</td>
                          <td style="text-align:center;">{{$dp->nama_ruang}}</td>
                          <td style="text-align:center;">{{$dp->nama_admin}}</td>
                          <td style="text-align:center;">{{$dp->status}}</td>
                          <td style="text-align:center;">
                            <a href="/{{$dp->id_peminjaman}}/formkembalian"><button class="btn btn-danger btn-sm">Kembalikan</button></a>
                          </td>
                        </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </section>
      <!-- END DAFTAR PEMINJAM -->

    </section>
    <!-- END MAIN CONTENT -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('#example1').dataTable();
      });
    </script>

@endsection