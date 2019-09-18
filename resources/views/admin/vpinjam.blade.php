@extends('layouts.master')
@section('content')
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
            <form class="form-horizontal">
              <div class="box-body ">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Waktu Pinjam</label>
                  <div class="col-sm-10">
                    <p class="form-control" disabled>12.00</p>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Peminjam</label>
                  <div class="col-sm-10">
                    <input type="type" name="cnama" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <select  style="width: 10%">
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jurusan</label>
                  <div class="col-sm-10">
                    <select  style="width: 10%">
                    <option>RPL</option>
                    <option>TKJ</option>
                    <option>MM1</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Barang Yang Dipinjam</label>
                  <div class="col-sm-10">
                    <select  style="width: 10%">
                    <option>Logitech</option>
                    <option>StopKontak</option>
                    </select>
                  </div>
                </div>                

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Barang</label>
                  <div class="col-sm-10">
                    <select  style="width: 10%">
                    <option>Mic</option>
                    <option>Colokan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kuantitas</label>
                  <div class="col-sm-10">
                    <input type="number" name="" style="width: 10%">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-10">
                    <select style="width: 10%">
                    <option>A01</option>
                    <option>A02</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Petugas</label>
                  <div class="col-sm-10">
                    <select style="width: 10%">
                    <option>Aji</option>
                    <option>Norma</option>
                    </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Pinjam Barang</button>
              </div>
              <!-- /.box-footer -->
            </form>
      </div>
    </div>
      <!-- /.row -->
      <!-- END TAMBAH BARANG -->

    </section>
    <!-- END MAIN CONTENT -->
@endsection