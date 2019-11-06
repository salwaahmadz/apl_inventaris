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
            <form action="/formpinjamuser/pinjambarang" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="box-body ">
                <!-- <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" >Waktu Pinjam</label>
                  <div class="col-sm-10">
                    <p class="form-control" disabled>12.00</p>
                  </div>
                </div> -->
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Peminjam</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" disabled="" value="{{Session::get('namauser')}}" style="width: 25%">
                  </div>
                </div>

                <div class="form-group" hidden="">
                  <div class="col-sm-10">
                    <input type="text" name="iduser" disabled="" value="{{Session::get('id_user')}}" style="width: 25%">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="kelas" disabled="" value="{{Session::get('kelas')}}" style="width: 25%">
                  </div>
                </div>

                <div class="form-group" hidden="">
                  <div class="col-sm-10">
                    <input type="text" name="idkelas" disabled="" value="{{Session::get('id_kelas')}}" style="width: 25%">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jurusan</label>
                  <div class="col-sm-10">
                    <input type="text" name="jurusan" disabled="" value="{{Session::get('jurusan')}}" style="width: 25%">
                  </div>
                </div>

                <div class="form-group" hidden="">
                  <div class="col-sm-10">
                    <input type="text" name="idjurusan" disabled="" value="{{Session::get('id_jurusan')}}" style="width: 25%">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Barang Yang Dipinjam</label>
                  <div class="col-sm-10">
                    <select class="pilihdata" style="width: 25%" name="pilihbarang">
                    @foreach($pilihbarang as $pb)
                    <option value="{{$pb->id_inventaris}}">{{$pb->nama_barang}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>                

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Barang</label>
                  <div class="col-sm-10">
                    <select class="pilihdata" style="width: 25%" name="pilihjenis">
                    @foreach($pilihjenis as $pjs)
                    <option value="{{$pjs->id_jenis}}">{{$pjs->nama_jenis}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kuantitas</label>
                  <div class="col-sm-10">
                    <input type="text" name="kuantitas" style="width:25%">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-10">
                    <select class="pilihdata" style="width: 25%" name="pilihruang">
                    @foreach($pilihruang as $pr)
                    <option value="{{$pr->id_ruang}}">{{$pr->nama_ruang}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Petugas</label>
                  <div class="col-sm-10">
                    <select class="pilihdata" style="width: 25%" name="pilihpetugas">
                    @foreach($pilihpetugas as $pp)
                    <option value="{{$pp->id_admin}}">{{$pp->nama_admin}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="text" name="status" hidden="" value="1" style="width: 25%">
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