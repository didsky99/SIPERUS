<?php namespace App\Http\Controllers;

use DB;
use Input;
use Redirect;
use Fpdf;
use Illuminate\Http\Request;
use Validator;
use Session;
use File;

date_default_timezone_set('Asia/Jakarta');
class SettingController extends Controller {
	public function __construct(){ $this->middleware('guest'); }

	/* Function View */
	public function viewSetting(){
		if(session('idProvinsi') == ''){
			$dataAkses = DB::table('ref_akses')
				->select('*','akses_id as id','akses_nama as value')
					->where('akses_id','>',0)
						->get();
			$dataAgama = DB::table('ref_agama')
				->select('*','agama_id as id','agama_value as value')
					->where('agama_id','>',0)
						->get();
			$dataIdentitas = DB::table('ref_identitas')
				->select('*','identitas_id as id','identitas_value as value')
					->where('identitas_id','>',0)
						->get();
			$dataJk = DB::table('ref_jk')
				->select('*','jk_id as id','jk_value as value')
					->where('jk_id','>',0)
						->get();
			$dataPekerjaan = DB::table('ref_pekerjaan')
				->select('*','pekerjaan_id as id','pekerjaan_value as value')
					->where('pekerjaan_id','>',0)
						->get();
			$dataStatus = DB::table('ref_status')
				->select('*','status_id as id','status_value as value')
					->where('status_id','>',0)
						->get();
			return view('main.setting.setting',array(
				'dataAgama' => $dataAgama,
				'dataAkses' => $dataAkses,
				'dataIdentitas' => $dataIdentitas,
				'dataJk' => $dataJk,
				'dataPekerjaan' => $dataPekerjaan,
				'dataStatus' => $dataStatus


			));
		} else {
			return redirect('logout');
		}
	}
	/* /. Function View */

	/* Function Add */

	public function addSetting($jenis){
		if($jenis == 'hak_akses'){
			$aksesNama = @$_POST['akses_nama'];

			$prosesInsert = DB::table('ref_akses')
			->insertGetId([
				'akses_nama' => $aksesNama,
				'created_date' => date('Y-m-d H:i:s'),
				'created_by' => 1
			]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'agama'){
			$aksesNama = @$_POST['agama_value'];

			$prosesInsert = DB::table('ref_agama')
			->insertGetId([
				'agama_value' => $aksesNama,
				'agama_created_date' => date('Y-m-d H:i:s'),
				'agama_created_by' => 1
			]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'identitas'){
			$aksesNama = @$_POST['identitas_value'];

			$prosesInsert = DB::table('ref_identitas')
			->insertGetId([
				'identitas_value' => $aksesNama,
				'identitas_created_date' => date('Y-m-d H:i:s'),
				'identitas_created_by' => 1
			]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'jk'){
			$aksesNama = @$_POST['jk_value'];

			$prosesInsert = DB::table('ref_jk')
			->insertGetId([
				'jk_value' => $aksesNama,
				'jk_created_date' => date('Y-m-d H:i:s'),
				'jk_created_by' => 1
			]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'pekerjaan'){
			$aksesNama = @$_POST['pekerjaan_value'];

			$prosesInsert = DB::table('ref_pekerjaan')
			->insertGetId([
				'pekerjaan_value' => $aksesNama,
				'pekerjaan_created_date' => date('Y-m-d H:i:s'),
				'pekerjaan_created_by' => 1
			]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'status'){
			$aksesNama = @$_POST['status_value'];

			$prosesInsert = DB::table('ref_status')
			->insertGetId([
				'status_value' => $aksesNama,
				'status_created_date' => date('Y-m-d H:i:s'),
				'status_created_by' => 1
			]);
			return redirect('setting')->with('tabActive',$jenis);
		}
	}

//End Function Add

// Function Edit
	public function editSetting($jenis){
		if($jenis == 'hak_akses'){
			$aksesId = @$_POST['edit_id_akses'];
			$aksesNama = @$_POST['edit_nama_akses'];
			
			$prosesUpdate = DB::table('ref_akses')
				->where('akses_id',$aksesId)
				->update([
					'akses_nama' => $aksesNama
				]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'agama'){
			$agamaId = @$_POST['edit_id_agama'];
			$agamaNama = @$_POST['edit_nama_agama'];
			
			$prosesUpdate = DB::table('ref_agama')
				->where('agama_id',$agamaId)
				->update([
					'agama_value' => $agamaNama
				]);
			return redirect('setting')->with('tabActive',$agama);
		}else if($jenis == 'identitas'){
			$identitasId = @$_POST['edit_id_identitas'];
			$identitasNama = @$_POST['edit_nama_identitas'];
			
			$prosesUpdate = DB::table('ref_identitas')
				->where('identitas_id',$identitasId)
				->update([
					'identitas_value' => $identitasNama
				]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'jk'){
			$jkId = @$_POST['edit_id_jk'];
			$jkNama = @$_POST['edit_nama_jk'];
			
			$prosesUpdate = DB::table('ref_jk')
				->where('jk_id',$jkId)
				->update([
					'jk_value' => $jkNama
				]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'pekerjaan'){
			$pekerjaanId = @$_POST['edit_id_pekerjaan'];
			$pekerjaanNama = @$_POST['edit_nama_pekerjaan'];
			
			$prosesUpdate = DB::table('ref_pekerjaan')
				->where('pekerjaan_id',$pekerjaanId)
				->update([
					'pekerjaan_value' => $pekerjaanNama
				]);
			return redirect('setting')->with('tabActive',$jenis);
		}else if($jenis == 'status'){
			$statusId = @$_POST['edit_id_status'];
			$statusNama = @$_POST['edit_nama_status'];
			
			$prosesUpdate = DB::table('ref_status')
				->where('status_id',$statusId)
				->update([
					'status_value' => $statusNama
				]);
			return redirect('setting')->with('tabActive',$jenis);
		}
		return redirect('setting')->with('tabActive',$jenis);

	}
//End Function Edit

	public function prosesDeleteMenu($menu, $id){
		$prosesDelete = DB::table('ref_'.$menu)
			->where($menu.'_id',$id)
				->delete();
		return redirect('setting')->with('tabActive',$menu);
	}
	/* /. Function Proses */
	
}
