<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="form-group">
			<label>No. KTP / NIK</label>
			<input type="text" name="nik" id="nik" class="form-control">
		</div>
	</div>
	<div class="col-md-1 col-sm-1 col-xs-1">
		<button class="btn btn-warning" onclick="search_anggota()" style="margin-top: 26px;"><i class="fa fa-search"></i></button>
	</div>
</div>
<script src="{{ asset('asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script>
	function search_anggota(){
		var nik = $("#nik").val();

		$.ajax({
			type : "GET",
			url : "{{ asset('ajax-cari-anggota') }}",
			data : {
				'nik' : nik
			},
			success:function(resp){
				$("#area-data").html(resp);
			}
		})
	}
</script>