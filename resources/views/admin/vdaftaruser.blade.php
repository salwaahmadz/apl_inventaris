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
			<li>
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
			<li class="active treeview">
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
			<li><a href="/admin"><i class="fa fa-cubes"></i> Home</a></li>
			<li class="active">Daftar Pengguna</li>
		</ol>
	</section>

	<section class="content-header">
		<!-- Modal Button Trigger -->
		<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModal">
		Tambah Pengguna</button>
		<!-- End Modal Trigger -->
	</section>

	<!-- MODAL -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel">Tambah Pengguna Baru</h3>
				</div>

				<div class="modal-body">
					<form action="/daftaruser/tambahuser" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Pengguna</label>
							<input name ="namauser" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nama Pengguna">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Kelas</label>
							<div>
								<select class="select2row" style="width:25%" name="kelas">
									@foreach($pilihkelas as $pk)
									<option value="{{$pk->id_kelas}}">{{$pk->tingkat_kelas}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Jurusan</label>
							<div>
								<select class="select2row" style="width:25%" name="jurusan">
									@foreach($pilihjurusan as $pj)
									<option value="{{$pj->id_jurusan}}">{{$pj->nama_jurusan}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input name ="username" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Username">
						</div>

						<div class="form-group">
							<input type="hidden" class="form-control" placeholder="Password" name="_token" value="{{ csrf_token()}}">
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" value="">
							</div>

							<div class="form-group">
								<input type="password" class="form-control" placeholder="Retype password" name="confirmation" value="">
							</div>

							<div class="form-group" hidden="">
								<div>
									<select class="form-control" style="width: 10 0%;" name="level">
										<option value="2"></option>
									</select>
								</div>
							</div>
						</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>    
		<!-- END MODAL -->



		<!-- DAFTAR RUANGAN -->
		<section class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="box">
						<div class="box-header">
							<h3><b>Data Pengguna</b></h3>
						</div>

						<div class="box-body" style="overflow-x: auto;">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="text-align:center;">ID Pengguna</th>
										<th style="text-align: center;">Nama</th>
										<th style="text-align:center;">Kelas</th>
										<th style="text-align:center;">Jurusan</th>
										<th style="text-align:center;">Username</th>
									</tr>
								</thead>

								<tbody>
									@foreach($daftar_user as $du)
									<tr>
										<td>{{$du->id_user}}</td>		
										<td>{{$du->nama_user}}</td>
										<td>{{$du->tingkat_kelas}}</td>
										<td>{{$du->nama_jurusan}}</td>
										<td>{{$du->username}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END DAFTAR RUANGAN -->

		<script type="text/javascript">
			$(document).ready(function(){
				$('#example1').dataTable();
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.select2row').select2();
			});
		</script>
		@endsection