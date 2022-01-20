@extends('main.layout.layout')

@section('title-page','List Statistik')

@section('content')
	@section('modal_struk_tipe','Provinsi')
	@section('struk_tipe_menu','Master Data <small>Statistik</small>')
	@section('struk_tipe_box_header','List Provinsi')
	
	@section('content_action_tambah','proses/statistik')
	@section('content_action_edit','proses/statistik/')
	
	@section('content_table_header')
		<tr>
			<th>No</th>
			<th>Nama Provinsi</th>
			<th>DPC</th>
			<th>PAC</th>
			<th>Ranting</th>
			<th>Anak Ranting</th>
			<th>KPA</th>
			<th width="150">Aksi</th>
		</tr>
	@stop	

	@section('content_table_body')
		{{--*/$no =1/*--}}
		@foreach($data as $tmp)
			{{--*/
				$obj[$tmp->geo_prov_id] = [
					'pengurus' => $tmp->pengurus_id,
					'prov' => $tmp->geo_prov_id,
					'dpc' => $tmp->pengurus_dpc,
					'pac' => $tmp->pengurus_pac,
					'ranting' => $tmp->pengurus_ranting,
					'anak_ranting' => $tmp->pengurus_anak_ranting,
					'kpa' => $tmp->pengurus_kpa,
					'dpc_ada' => $tmp->pengurus_dpc_ada,
					'pac_ada' => $tmp->pengurus_pac_ada,
					'ranting_ada' => $tmp->pengurus_ranting_ada,
					'anak_ranting_ada' => $tmp->pengurus_anak_ranting_ada,
					'kpa_ada' => $tmp->pengurus_ranting_ada
				]
			/*--}}
			{{--*/ $dataEdit = "'".$tmp->pengurus_id."','".$tmp->geo_prov_id."','".$tmp->pengurus_dpc."','".$tmp->pengurus_pac."','".$tmp->pengurus_ranting."','".$tmp->pengurus_anak_ranting."','".$tmp->pengurus_kpa."','".$tmp->pengurus_dpc_ada."','".$tmp->pengurus_pac_ada."','".$tmp->pengurus_ranting_ada."','".$tmp->pengurus_anak_ranting_ada."','".$tmp->pengurus_kpa_ada."'" /*--}}
			@include('main.master.statistik.include.table_content')
			<tr>
				<td>{{ $no++ }}</td>
				@yield('table_data')
				@yield('table_action')
			</tr>
		  @endforeach
	@stop
<script src="{{ asset('asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script>
function cekData(pengurus){
	var obj = <?php print_r(json_encode(@$obj)); ?>;
	console.log(obj[pengurus].dpc);
	$('#pengurus').val(obj[pengurus].pengurus);
	$('#provinsi').val(obj[pengurus].prov);
	$('#pengurus_dpc').val(obj[pengurus].dpc);
	$('#pengurus_pac').val(obj[pengurus].pac);
	$('#pengurus_ranting').val(obj[pengurus].ranting);
	$('#pengurus_anak_ranting').val(obj[pengurus].anak_ranting);
	$('#pengurus_kpa').val(obj[pengurus].kpa);
	$('#pengurus_dpc_ada').val(obj[pengurus].dpc_ada);
	$('#pengurus_pac_ada').val(obj[pengurus].pac_ada);
	$('#pengurus_ranting_ada').val(obj[pengurus].ranting_ada);
	$('#pengurus_anak_ranting_ada').val(obj[pengurus].anak_ranting_ada);
	$('#pengurus_kpa_ada').val(obj[pengurus].kpa_ada);
}
function editStatistik(pengurus,prov,dpc,pac,ranting,anak_ranting,kpa,dpc_ada,pac_ada,ranting_ada,anak_ranting_ada,kpa_ada){
	$('#pengurus').val(pengurus);
	$('#provinsi').val(prov);
	$('#pengurus_dpc').val(dpc);
	$('#pengurus_pac').val(pac);
	$('#pengurus_ranting').val(ranting);
	$('#pengurus_anak_ranting').val(anak_ranting);
	$('#pengurus_kpa').val(kpa);
	$('#pengurus_dpc_ada').val(dpc_ada);
	$('#pengurus_pac_ada').val(pac_ada);
	$('#pengurus_ranting_ada').val(ranting_ada);
	$('#pengurus_anak_ranting_ada').val(anak_ranting_ada);
	$('#pengurus_kpa_ada').val(kpa_ada);
	actionEdit(pengurus);
}
</script>


	@include('main.master.statistik.include.modal')
	@include('main.master.statistik.include.modal-detail')
	@include('main.master.statistik.include.body-content')
	
	@section('content_action_edit_func')
		$('#pengurus').val(pengurus);
		$('#provinsi').val(prov);
		$('#pengurus_dpc').val(dpc);
		$('#pengurus_pac').val(pac);
		$('#pengurus_ranting').val(ranting);
		$('#pengurus_anak_ranting').val(anak_ranting);
		$('#pengurus_kpa').val(kpa);
		$('#pengurus_dpc_ada').val(dpc_ada);
		$('#pengurus_pac_ada').val(pac_ada);
		$('#pengurus_ranting_ada').val(ranting_ada);
		$('#pengurus_anak_ranting_ada').val(anak_ranting_ada);
		$('#pengurus_kpa_ada').val(kpa_ada);
	@stop
@endsection