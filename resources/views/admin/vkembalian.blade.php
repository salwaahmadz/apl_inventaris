@extends('layouts.master')
@section('content')

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">SIDEBAR MENU</li>

        <!-- DASHBOARD -->
        <li class="active treeview">
          <a href="/admin">
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
          <a href="#">
            <i class="fa fa-cube"></i> <span>Daftar Jenis Barang</span>
          </a>
        </li>
        <!-- END DAFTAR JENIS BARANG -->

        <!-- DAFTAR RUANGAN -->
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Daftar Ruangan</span>
          </a>
        </li>
        <!-- END DAFTAR RUANGAN -->

        <!-- DAFTAR PENGGUNA -->
        <li>
          <a href="#">
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
        Dashboard
        <small>MAIN MENU</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12">
        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Form Peminjaman Berikut.</h3>
            </div>
            <!-- /.box-header -->

            <style type="text/css">
              .form-group label{
                text-align: left !important; 
              }
            </style>

            <!-- form start -->
            <form action="/{{$id_peminjaman}}/formkembalian" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="box-body ">
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Peminjam</label>
                  <div class="col-sm-10">
                    <input style="width:25%" name="iduser" disabled="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Barang Yang Dipinjam</label>
                  <div class="col-sm-10">
                    <input style="width: 25%" name="idinventaris" disabled="">
                  </div>
                </div>                
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kondisi</label>
                  <div class="col-sm-10">
                    <select name="kondisi">
                    <option style="width: 25%">Baik</option>
                    <option style="width: 25%">Rusak</option>
                    </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-warning btn-info pull-right">Kembalikan</button>
              </div>
              <!-- /.box-footer -->
            </form>
      </div>
    </div>
      <!-- /.row -->
      <!-- END TAMBAH BARANG -->

    </section>
    <!-- END MAIN CONTENT -->

    <script type="text/javascript">
      $(document).ready(function(){
        $('.pilihdata').select2({
           width: 'resolve' 
        });
      });
    </script>
@endsection