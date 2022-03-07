@if(session('idProvinsi') != '' OR session('idProvinsi') == NULL && session('idRole') == 3)
		{{--*/ $statusProvinsi = 'hide' /*--}}
	@else
		{{--*/ $statusProvinsi = 'show' /*--}}
@endif
<div class="col-md-2 col-sm-4 col-xs-6 {{ (session('idRole') == 3)?$statusProvinsi:'' }}" style="display:@yield('indo_combo_fprov','none')">
	<select class="form-control custom-field-litle" id="prov" name="prov">
		<option>--- Provinsi ---</option>
		@foreach($provinsi as $tmp)									
			<option value="{{ $tmp->geo_prov_id }}"> {{ $tmp->geo_prov_nama }} </option>
		@endforeach
	</select>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" style="display:@yield('indo_combo_fkab','none')">
	<select class="form-control custom-field-litle" id="kab" name="kab">
		<option>--- Kabupaten ---</option>
	</select>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" style="display:@yield('indo_combo_fkec','none')">
	<select class="form-control custom-field-litle" id="kec" name="kec">
		<option>--- Kecamatan ---</option>
	</select>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" style="display:@yield('indo_combo_fkel','none')">
	<select class="form-control custom-field-litle" id="kel" name="kel" >
		<option>--- Kelurahan ---</option>
	</select>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" style="display:@yield('indo_combo_frw','none')">
	<select class="form-control custom-field-litle" id="rw" name="rw">
		<option>--- RW ---</option>
	</select>
</div>
<div class="col-md-2 col-sm-4 col-xs-6" style="display:@yield('indo_combo_frt','none')">
	<select class="form-control custom-field-litle" id="rt" name="rt">
		<option>--- RT ---</option>
	</select>
</div>

<div class="col-md-2 col-sm-4 col-xs-6" style="display:@yield('indo_combo_fdpp','none')">
	<selct class="form-group">
		<label>Cari Berdasarkan</label>
		<select name="search_by" id="search-by" class="form-control">
			<option value="">--SELECT--</option>
			<option value="nama">Nama</option>
			<option value="jabatan">Jabatan</option>
			<option value="no_kta">Nomor KTA</option>
			<option value="no_ktp">Nomor KTP</option>
			<option value="no_sk">Nomor SK</option>
		</select>
	</selct>
</div>
<div class="col-md-4 col-sm-4 col-xs-6" style="display:@yield('indo_combo_fdpp','none')">
	<selct class="form-group">
		<label>Kata Kunci</label>
		<input type="text" class="form-control" name="keyword">
	</selct>
</div>
<div class="col-md-1" style="display:@yield('indo_combo_fdpp','none')">
	<button class="btn btn-danger" id="btn-search-dpp" style="margin-top: 25px">
		<i class="fa fa-search"></i>
	</button>
</div>