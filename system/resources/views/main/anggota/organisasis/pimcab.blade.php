@extends('main.layout.layout')
@section('content')
	<script type="text/javascript" src="{{asset('asset/js/jquery-3.1.1.js ')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/AhmadApp.js ')}}"></script>
	@section('title-page','Data Pengurus PIMCAB ')
	@section('modal_struk_tipe','PIMCAB')
	@section('struk_tipe_menu','Data Pengurus')
	@section('struk_tipe_sub_menu','PIMCAB')
	@section('struk_tipe_box_header','List PIMCAB')

	@section('use_filter_kta','none')
	@section('use_filter_sk','none')

	@section('modal_struk_input_tambahan')
		@section('indo_combo_prov','initial')
		@section('indo_combo_kab','initial')
		@include('main.input.section_indo_combo')
	@stop

	@section('content_filter_combo')
		@section('indo_combo_fprov','initial')
		@section('indo_combo_fkab','initial')
		@include('main.input.section_indo_filter_combo')
	@stop

	@section('content_action_tambah','tambah/pimcab')
	@section('content_action_edit','edit/pimcab/')

	@section('goto_kab')
		location.href="{{url()}}/data_pengurus/pimcab/"+provId+"/"+kabId;
	@stop

	@section('content_table_body')
		{{--*/$no =1/*--}}
		{{--*/$type='pimcab'/*--}}
		  @foreach($data as $val)
		  {{--*/

			$obj='noSk:`'.$val->no_sk2.
			'`,geo_kab_id:`'.$val->geo_kab_id.
			'`,turunSK:`'.$val->turun_sk.'`'

			/*--}}
		  @include('main.input.section_generik_contents')
		  <tr>
		  <td>{{ $no++ }}</td>
			@yield('table_data')		
			@yield('table_action')
		  </tr>
		  @endforeach
	@stop
	@section('content_table_header')
		@yield('table_struk_header')
	@stop	
	
	<script src="{{asset('asset/js/moment.js')}}"></script>
	@section('content_action_edit_func')
		$("#kab2").val(obj.geo_kab_id)
		$("#no_sk").val(obj.noSk)
		$("#date").val(moment(obj.turunSK).format('DD-MM-YYYY'))
	@stop
	@include('main.input.section_content_struktur')
	@include('main.input.section_modal_struktur')
	@include('main.anggota.partai.include.modal_detail')
	
@stop
