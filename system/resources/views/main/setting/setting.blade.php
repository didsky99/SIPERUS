@extends('main.layout.layout')

@section('title-page','Setting')

@section('main-sidebar')
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	  <h1>
        Setting
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setting</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
	  <div class="row">
		<div class="col-md-12">
		  <div class="nav-tabs-custom tab-info">
			<ul class="nav nav-tabs">
			  <li class="active hakAkses"><a id='linkhakakses' href="#hakAkses" data-toggle="tab">Hak Akses</a></li>
			  <li class="agama"><a id='linkagama' href="#agama" data-toggle="tab">Agama</a></li>
			  <li class="identitas"><a id='linkidentitas' href="#identitas" data-toggle="tab">Identitas</a></li>
			  <li class="jk"><a id='linkjk' href="#jk" data-toggle="tab">Jenis Kelamin</a></li>
			  <li class="pekerjaan"><a id='linkpekerjaan' href="#pekerjaan" data-toggle="tab">Perkerjaan</a></li>
			  <li class="statusKawin"><a id='linkstatuskawin' href="#statusKawin" data-toggle="tab">Status Kawin</a></li>
			</ul>
			<div class="tab-content">
			  <div class="active tab-pane" id="hakAkses">
				<div class="col-md-6 no-padding">
					<div id="btnEditSettingAkses" class="btn-primary btn hide" data-toggle="modal" data-target="#editSettingAkses"> Tambah</div>
					<div class="btn-danger btn" data-toggle="modal" data-target="#modalTambahHakAkses">Tambah</div>
				</div>
				<table class="table table-striped data-table" style="font-size:15px;">
					<thead>
						<tr>
							<th>No</th>
							<th>Data</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($dataAkses as $tmp)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $tmp->value }}</td>
								<!-- <td><div class="btn-warning btn" onclick="editSeting('akses','{{ $tmp->akses_id }}')"><span class="glyphicon glyphicon-pencil"></span></div> -->
								<td><div class="btn btn-warning" onclick='editSettingAkses("{{ $tmp->akses_id }}","{{ $tmp->akses_nama }}")'><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit"></span></div></a>
								<a href="{{ asset('proses/hapusset/akses/'.$tmp->akses_id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><div class="btn btn-danger hapus-petugas"><span class="glyphicon glyphicon-trash"></span></div></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			  </div>
			  <!-- /.tab-pane -->
			  <div class="tab-pane" id="agama">
				<div class="col-md-6 no-padding">
					<div id="btnEditSettingAgama" class="btn-primary btn hide" data-toggle="modal" data-target="#editSettingAgama"> Tambah</div>
					<div class="btn-danger btn" data-toggle="modal" data-target="#modalTambahAgama">Tambah</div>
				</div>
				<table class="table table-striped data-table" style="font-size:15px;">
					<thead>
						<tr>
							<th>No</th>
							<th>Data</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($dataAgama as $tmp)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $tmp->value }}</td>
								<!-- <td><div class="btn-warning btn" onclick="editSeting('akses','{{ $tmp->id }}')"><span class="glyphicon glyphicon-pencil"></span></div>								 -->
								<td><div class="btn btn-warning" onclick='editSettingAgama("{{ $tmp->agama_id }}","{{ $tmp->agama_value }}")'><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit"></span></div></a>
								<a href="{{ asset('proses/hapusset/agama/'.$tmp->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><div class="btn btn-danger hapus-petugas"><span class="glyphicon glyphicon-trash"></span></div></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			  </div>
			  <!-- /.tab-pane -->
			  <div class="tab-pane" id="identitas">
				<div class="col-md-6 no-padding">
					<div id="btnEditSettingIdentitas" class="btn-primary btn hide" data-toggle="modal" data-target="#editSettingIdentitas"> Tambah</div>
					<div class="btn-danger btn" data-toggle="modal" data-target="#modalTambahIdentitas">Tambah</div>
				</div>
				<table class="table table-striped data-table" style="font-size:15px;">
					<thead>
						<tr>
							<th>No</th>
							<th>Data</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($dataIdentitas as $tmp)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $tmp->value }}</td>
								<!-- <td><div class="btn-warning btn" onclick="editSeting('akses','{{ $tmp->id }}')"><span class="glyphicon glyphicon-pencil"></span></div> -->
								<td><div class="btn btn-warning" onclick='editSettingIdentitas("{{ $tmp->identitas_id }}","{{ $tmp->identitas_value }}")'><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit"></span></div></a>
								<a href="{{ asset('proses/hapusset/identitas/'.$tmp->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><div class="btn btn-danger hapus-petugas"><span class="glyphicon glyphicon-trash"></span></div></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			  </div>
			  <!-- /.tab-pane -->
			  <div class="tab-pane" id="jk">
				<div class="col-md-6 no-padding">
					<div id="btnEditSettingJk" class="btn-primary btn hide" data-toggle="modal" data-target="#editSettingJk"> Tambah</div>
					<div class="btn-danger btn" data-toggle="modal" data-target="#modalTambahJk">Tambah</div>
				</div>
				<table class="table table-striped data-table" style="font-size:15px;">
					<thead>
						<tr>
							<th>No</th>
							<th>Data</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($dataJk as $tmp)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $tmp->value }}</td>
								<!-- <td><div class="btn-warning btn" onclick="editSeting('akses','{{ $tmp->id }}')"><span class="glyphicon glyphicon-pencil"></span></div> -->
								<td><div class="btn btn-warning" onclick='editSettingJk("{{ $tmp->jk_id }}","{{ $tmp->jk_value }}")'><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit"></span></div></a>
								<a href="{{ asset('proses/hapusset/jk/'.$tmp->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><div class="btn btn-danger hapus-petugas"><span class="glyphicon glyphicon-trash"></span></div></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			  </div>
			  <!-- /.tab-pane -->
			  <div class="tab-pane" id="pekerjaan">
				<div class="col-md-6 no-padding">
					<div id="btnEditSettingPekerjaan" class="btn-primary btn hide" data-toggle="modal" data-target="#editSettingPekerjaan"> Tambah</div>
					<div class="btn-danger btn" data-toggle="modal" data-target="#modalTambahPekerjaan">Tambah</div>
				</div>
				<table class="table table-striped data-table" style="font-size:15px;">
					<thead>
						<tr>
							<th>No</th>
							<th>Data</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($dataPekerjaan as $tmp)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $tmp->value }}</td>
								<!-- <td><div class="btn-warning btn" onclick="editSeting('akses','{{ $tmp->id }}')"><span class="glyphicon glyphicon-pencil"></span></div> -->
								<td><div class="btn btn-warning" onclick='editSettingPekerjaan("{{ $tmp->pekerjaan_id }}","{{ $tmp->pekerjaan_value }}")'><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit"></span></div></a>
								<a href="{{ asset('proses/hapusset/pekerjaan/'.$tmp->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><div class="btn btn-danger hapus-petugas"><span class="glyphicon glyphicon-trash"></span></div></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			  </div>
			  <!-- /.tab-pane -->
			  <div class="tab-pane" id="statusKawin">
			  	<div id="btnEditSettingStatus" class="btn-primary btn hide" data-toggle="modal" data-target="#editSettingStatus"> Tambah</div>
				<div class="col-md-6 no-padding">
					<div class="btn-danger btn" data-toggle="modal" data-target="#modalTambahStatus">Tambah</div>
				</div>
				<table class="table table-striped data-table" style="font-size:15px;">
					<thead>
						<tr>
							<th>No</th>
							<th>Data</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@foreach($dataStatus as $tmp)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $tmp->value }}</td>
								<!-- <td><div class="btn-warning btn" onclick="editSeting('akses','{{ $tmp->id }}')"><span class="glyphicon glyphicon-pencil"></span></div> -->
								<td><div class="btn btn-warning" onclick='editSettingStatus("{{ $tmp->status_id }}","{{ $tmp->status_value }}")'><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit"></span></div></a>
								<a href="{{ asset('proses/hapusset/status/'.$tmp->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><div class="btn btn-danger hapus-petugas"><span class="glyphicon glyphicon-trash"></span></div></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			  </div>
			  <!-- /.tab-pane -->
			</div>
			<!-- /.tab-content -->
		  </div>
		  <!-- /.nav-tabs-custom -->
		</div>
	  </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Add Hak Akses-->
<div class="modal primary" id="modalTambahHakAkses" role="dialog" aria-labelledby="tambahHakAksesLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/tambah/setting/hak_akses') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Tambah Hak Akses</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Akses Nama</label>
							<div class="col-md-8">
								<input type="text" name="akses_nama" id="akses_nama" class="form-control" placeholder="Akses Nama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!--End Add Hak Akses -->

<!-- Modal Add Agama-->
<div class="modal primary" id="modalTambahAgama" role="dialog" aria-labelledby="tambahAgamaLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/tambah/setting/agama') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Tambah Agama</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Nama Agama</label>
							<div class="col-md-8">
								<input type="text" name="agama_value" id="agama_value" class="form-control" placeholder="Akses Nama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!--End Add Agama -->

<!-- Modal Add Identitas-->
<div class="modal primary" id="modalTambahIdentitas" role="dialog" aria-labelledby="tambahIdentitasLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/tambah/setting/identitas') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Tambah Identitas</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Nama Identitas</label>
							<div class="col-md-8">
								<input type="text" name="identitas_value" id="identitas_value" class="form-control" placeholder="Akses Nama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!--End Add Identitas -->

<!-- Modal Add jk-->
<div class="modal primary" id="modalTambahJk" role="dialog" aria-labelledby="tambahJkLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/tambah/setting/jk') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Tambah Jenis Kelamin</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Jenis Kelamin</label>
							<div class="col-md-8">
								<input type="text" name="jk_value" id="jk_value" class="form-control" placeholder="Akses Nama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!--End Add jk -->

<!-- Modal Add Pekerjaan-->
<div class="modal primary" id="modalTambahPekerjaan" role="dialog" aria-labelledby="tambahPekerjaanLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/tambah/setting/pekerjaan') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Tambah Pekerjaan</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Nama Pekerjaan</label>
							<div class="col-md-8">
								<input type="text" name="pekerjaan_value" id="pekerjaan_value" class="form-control" placeholder="Akses Nama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!--End Add pekerjaan -->

<!-- Modal Add status-->
<div class="modal primary" id="modalTambahStatus" role="dialog" aria-labelledby="tambahStatusLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/tambah/setting/status') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Tambah Status Kawin</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Status Kawin</label>
							<div class="col-md-8">
								<input type="text" name="status_value" id="status_value" class="form-control" placeholder="Akses Nama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!--End Add status -->

<!-- Modal Edit Akses-->
<div class="modal primary" id="editSettingAkses" role="dialog" aria-labelledby="editSettingAksesLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/edit/setting/hak_akses') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Edit Hak Akses</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Hak Akses</label>
							<div class="col-md-8">
								<input type="text" name="edit_id_akses" id="edit_id_akses" class="form-control hide" placeholder="Nama Akses">
								<input type="text" name="edit_nama_akses" id="edit_nama_akses" class="form-control" placeholder="Hak Akses">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!-- End edit akses -->

<!-- Modal Edit Agama-->
<div class="modal primary" id="editSettingAgama" role="dialog" aria-labelledby="editSettingAgamaLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/edit/setting/agama') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Edit Agama</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Agama</label>
							<div class="col-md-8">
								<input type="text" name="edit_id_agama" id="edit_id_agama" class="form-control hide" placeholder="Nama Agama">
								<input type="text" name="edit_nama_agama" id="edit_nama_agama" class="form-control" placeholder="Agama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!-- End edit Agama -->

<!-- Modal Edit Identitas-->
<div class="modal primary" id="editSettingIdentitas" role="dialog" aria-labelledby="editSettingIdentitasLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/edit/setting/identitas') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Edit Identitas</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Identitas</label>
							<div class="col-md-8">
								<input type="text" name="edit_id_identitas" id="edit_id_identitas" class="form-control hide" placeholder="Nama Akses">
								<input type="text" name="edit_nama_identitas" id="edit_nama_identitas" class="form-control" placeholder="Hak Akses">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!-- End edit identitas -->

<!-- Modal Edit JK-->
<div class="modal primary" id="editSettingJk" role="dialog" aria-labelledby="editSettingJkLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/edit/setting/jk') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Edit Jenis Kelamin</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Jenis Kelamin</label>
							<div class="col-md-8">
								<input type="text" name="edit_id_jk" id="edit_id_jk" class="form-control hide" placeholder="Nama Agama">
								<input type="text" name="edit_nama_jk" id="edit_nama_jk" class="form-control" placeholder="Agama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!-- End edit JK -->

<!-- Modal Edit Pekerjaan-->
<div class="modal primary" id="editSettingPekerjaan" role="dialog" aria-labelledby="editSettingPekerjaanLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/edit/setting/pekerjaan') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Edit Pekerjaan</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Pekerjaan</label>
							<div class="col-md-8">
								<input type="text" name="edit_id_pekerjaan" id="edit_id_pekerjaan" class="form-control hide" placeholder="Nama Akses">
								<input type="text" name="edit_nama_pekerjaan" id="edit_nama_pekerjaan" class="form-control" placeholder="Hak Akses">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!-- End edit pekerjaan -->

<!-- Modal Edit Status-->
<div class="modal primary" id="editSettingStatus" role="dialog" aria-labelledby="editSettingStatusLabel" >
	<div class="modal-dialog modal-md" role="document">
		<form action="{{ asset('proses/edit/setting/status') }}" name="barangbuktiform" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header modal-primary">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title modal-primary" id="myModalLabel">Edit Status Kawin</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="nama" class="col-md-4">Status Kawin</label>
							<div class="col-md-8">
								<input type="text" name="edit_id_status" id="edit_id_status" class="form-control hide" placeholder="Nama Agama">
								<input type="text" name="edit_nama_status" id="edit_nama_status" class="form-control" placeholder="Agama">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"  id="barangbuktibtn">Simpan</button>
				</div>
			</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
<!-- End edit JK -->

<div id="modelButtonEdit" class="hidden btn-warning btn" data-toggle="modal" data-target="#modelEdit">Edit</div>
<div class="modal fade" id="modelEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">  
	<div class="modal-content">
	  <div class="modal-header modal-header-default modal-danger">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<div class="modal-title" id="myModalLabel">Edit Data</div>
	  </div>
	  <div class="modal-body" id="modelEditPlace">	
	  
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn-danger btn" data-dismiss="modal">Close</button>
		<button type="button" class="btn-danger btn" onclick="$('#btn-save').click()">Save changes</button>
	  </div>
	</div>
  </div>
</div>

<script src="{{ asset('asset/js/jquery-3.0.0.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){ 
		$('#link<?php echo session('tabActive'); ?>').click();
	});
	
	function editSettingAkses(akses_id,akses_nama){
	$('#edit_id_akses').val(akses_id);
	$('#edit_nama_akses').val(akses_nama);
	$('#btnEditSettingAkses').click();
	}
	function editSettingAgama(agama_id,agama_nama){
	$('#edit_id_agama').val(agama_id);
	$('#edit_nama_agama').val(agama_nama);
	$('#btnEditSettingAgama').click();
	}
	function editSettingIdentitas(identitas_id,identitas_nama){
	$('#edit_id_identitas').val(identitas_id);
	$('#edit_nama_identitas').val(identitas_nama);
	$('#btnEditSettingIdentitas').click();
	}
	function editSettingJk(jk_id,jk_nama){
	$('#edit_id_jk').val(jk_id);
	$('#edit_nama_jk').val(jk_nama);
	$('#btnEditSettingJk').click();
	}
	function editSettingPekerjaan(pekerjaan_id,pekerjaan_nama){
	$('#edit_id_pekerjaan').val(pekerjaan_id);
	$('#edit_nama_pekerjaan').val(pekerjaan_nama);
	$('#btnEditSettingPekerjaan').click();
	}
	function editSettingStatus(status_id,status_nama){
	$('#edit_id_status').val(status_id);
	$('#edit_nama_status').val(status_nama);
	$('#btnEditSettingStatus').click();
	}
</script>
@endsection