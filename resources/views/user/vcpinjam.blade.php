@extends('layouts.masteruser')
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
        <div class="col-md-6">
        <!-- Horizontal Form -->
        <!-- Horizontal Form -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Form Peminjaman Berikut.</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="#">
              <div class="box-body">
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <br>
                  <p>27 Agustus 2019</p>
                </div>
                
                <div class="form-group">
                  <label for="tanggal">Waktu Pinjam</label>
                  <br>
                  <p>16.00</p>
                </div>

                <div class="form-group">
                  <label for="tanggal">Kelas</label>
                  <br>
                  <p>XII - RPL</p>
                </div>

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <br>
                  <p>Salwa Ahmad Zanjabila</p>
                </div>

                <div class="form-group">
                  <label for="nama_barang">Barang Yang Dipinjam</label>
                  <br>
                  <select name="barang">
                    <option value="">Kabel</option>
                    <option value="">Colokan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="nama_barang">Kuantitas</label>
                  <br>  
                  <input type="number" name="quantity" style="width: 12%">
                </div>

                <div class="form-group">
                  <label for="nama_barang">Ruangan</label>
                  <br>
                  <select name="ruangan" style="width: 12%">
                    <OPTION value="">A01</OPTION>
                    <OPTION value="">A02</OPTION>
                    <OPTION value="">A03</OPTION>
                    <OPTION value="">A04</OPTION>
                    <OPTION value="">A05</OPTION>
                  </select>
                </div>

                <div class="form-group">
                  <label for="nama_barang">Petugas</label>
                  <br>
                  <select name="petugas" style="width: 12%">
                    <OPTION value="">Aji</OPTION>
                    <OPTION value="">Norma</OPTION>
                  </select>
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Pinjam Barang</button>
              </div>
            </form>
          </div>
      </div>
    </div>
      <!-- /.row -->
      <!-- END TAMBAH BARANG -->

    </section>
    <!-- END MAIN CONTENT -->
@endsection