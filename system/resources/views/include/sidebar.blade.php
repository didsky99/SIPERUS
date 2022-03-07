<?php $url = $_SERVER["REQUEST_URI"]; 
/*echo $url;*/
$dataMenu = HelperData::getMenu();
$tmp_url = explode('/',$url);
$subMenu = '';
$subbMenu = '';
$a = '';
$url = array();
$url_parent = array();
for($i=0;$i<count($tmp_url);$i++){
	if($i>=2){
		array_push($url,$tmp_url[$i]);
		array_push($url_parent,$tmp_url[$i]);
	}
}
$url = join('/',$url);
$url_parent = join('/',$url_parent);
if($url_parent == '/' || $url_parent == ''){
	$subMenu = 'Dashboard';	
}
if(strpos(' '.$url_parent,'/wilayah') == true){
	$subMenu = 'Master Data';	
	$subbMenu = 'Wilayah';	
} else if(strpos(' '.$url_parent,'user_management') == true){
	$subMenu = 'User Management';	
	$subbMenu = 'Struktur';	
} else if(strpos(' '.$url_parent,'dashboard') == true){
	$subMenu = 'Dashboard';	
	$subbMenu = 'Struktur';	
} else if(strpos(' '.$url_parent,'/struktur') == true){
	$subMenu = 'Master Data';	
	$subbMenu = 'Struktur';	
} else if(strpos(' '.$url_parent,'/kursi') == true){
	$subMenu = 'Master Data';	
	$subbMenu = 'Kursi';	
} else if(strpos(' '.$url_parent,'/perolehankursi') == true){
	$subMenu = 'Master Data';	
	$subbMenu = 'Perolehan Kursi';	
} else if(strpos(' '.$url_parent,'statistik') == true){
	$subMenu = 'Master Data';	
	$subbMenu = 'Statistik';		
} else if(strpos(' '.$url_parent,'penduduk') == true){
	$subMenu = 'Master Data';	
	$subbMenu = 'Penduduk';	
} else if(strpos(' '.$url_parent,'data_pengurus') == true){
	$subMenu = 'Daftar Pengurus Organisasi';	
	$subbMenu = 'Daftar Pengurus Organisasi';	
} else if(strpos(' '.$url_parent,'dprri') == true || strpos(' '.$url_parent,'dprdi') == true ||strpos(' '.$url_parent,'dprdii') == true ){
	$subMenu = 'Pendaftaran Anggota';	
	$subbMenu = 'Daftar Anggota Legislatif';	
}else if(strpos(' '.$url_parent,'/pusdatin_v3/view/waste') == true){
	$subMenu = 'Input Waste';	
}else if(strpos(' '.$url_parent,'/pusdatin_v3/user/tambah') == true){
	$subMenu = 'User Management';	
	$a = 'List User';
}else if(strpos(' '.$url_parent,'anggota') == true){
	$subMenu = 'Pendaftaran Anggota';	
	$subbMenu = 'Daftar	 Anggota Partai';	
}else if(strpos(' '.$url_parent,'report') == true){
	$subMenu = 'Report';	
	$subbMenu = 'Dashboard Report';	
}
?>
	<ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        @foreach($dataMenu as $aMenus)
			@if($aMenus->menu_file == 'verifikasi' && session('idRole') == '3')
				{{--*/ 
					$link = asset($aMenus->menu_file).'/'.session('idProvinsi2')
				 /*--}}	
			@else
				{{--*/ 
					$link = asset($aMenus->menu_file)
				 /*--}}
			@endif 
        <?php
			if($aMenus->menu == 'Dashboard'){ $icon = 'fa fa-dashboard'; } else 
			if($aMenus->menu == 'Master Data') { $icon = 'fa fa-book'; } else
			if($aMenus->menu == 'Data Anggota') { $icon = 'fa fa-user'; } else
			if($aMenus->menu == 'Data Pengurus') { $icon = 'fa fa-user'; } else
			if($aMenus->menu == 'User Management') { $icon = 'fa fa-user-plus'; } else
			if($aMenus->menu == 'Report') { $icon = 'fa fa-print'; } else
			if($aMenus->menu == 'Setting') { $icon = 'fa fa-cog'; } else
			if($aMenus->menu == 'Keluar') { $icon = 'fa fa-sign-out'; } else { $icon = 'fa fa-dashboard'; }
			/*echo $url;*/
	$menuLink = '/pusdatin_v3/'.$aMenus->menu_file;
        if($aMenus->menu_alias == $url || $subMenu == $aMenus->menu) { echo '<li class=" active treeview">'; } else { echo '<li class="treeview">'; }?>        
          <a href="{{ $link }}" <?php if($menuLink == $url){ ?> class="active" <?php } ?>>
            <i class="{{ $icon }}"></i> <span>{{$aMenus->menu}}</span>
            <?php  
              if($aMenus->parent_menu == 1)
              {
                echo '
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>';
              }
            ?>
          </a>
          <?php  
              if($aMenus->parent_menu == 1)
              {
                echo '<ul class="treeview-menu">';
					$submenu = DB::table('ref_role_menu')
						->join('m_users', 'm_users.role','=','ref_role_menu.status')
						->join('ref_menu', 'ref_menu.id','=','ref_role_menu.menu_id')
							->where('m_users.id', session('idLogin'))
							->where('ref_menu.menu_parent',$aMenus->id)
							->where('ref_menu.order_menu','!=',0)
								->orderBy('ref_menu.order_menu')
									->get();
                foreach ($submenu as $d_parents) { 
					?>
					@if($d_parents->menu_file == 'master/penduduk' && session('idRole') == '3')
						{{--*/ 
							$link = asset($d_parents->menu_file).'/'.session('idProvinsi2')
						 /*--}}	
					@else
						{{--*/ 
							$link = asset($d_parents->menu_file)
						 /*--}}
					@endif 
					<li class="<?php if($d_parents->menu == $subbMenu || $url == $d_parents->menu_file || $url == '/'.$d_parents->menu_file || $url_parent == $d_parents->menu_alias){ echo 'active'; }else{ echo 'non-active'; } ?>"><a href="{{ $link }}"><i class="fa fa-circle-o"></i> <span>{{ $d_parents->menu }}</span>
						<?php if($d_parents->parent_menu == 1 ){ ?>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>	
						<?php } ?>					
					</a>
						<?php 
							if($d_parents->parent_menu == 1){
								echo '<ul class="treeview-menu">';
									$submenu2 = DB::table('ref_role_menu')
										->join('m_users', 'm_users.role','=','ref_role_menu.status')
										->join('ref_menu', 'ref_menu.id','=','ref_role_menu.menu_id')
											->where('m_users.id', session('idLogin'))
											->where('ref_menu.menu_parent',$d_parents->id)
											->where('ref_menu.order_menu','!=',0)
												->orderBy('ref_menu.order_menu')
													->get();
								foreach($submenu2 as $d_parents2){ ?>
									@if($d_parents2->menu_file == 'master/wilayah/provinsi' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi')
										 /*--}}	
									@elseif($d_parents2->menu_file == 'data_anggota/dprdi' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi2')
										 /*--}}	 
									@elseif($d_parents2->menu_file == 'data_anggota/dprdii' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi2')
										 /*--}}	  	
									@elseif($d_parents2->menu_file == 'master/wilayah/kabupaten' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi2')
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/wilayah/kecamatan' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi2').'/0'
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/wilayah/kelurahan' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi2').'/0'
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/wilayah/rw' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi2').'/0'
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/wilayah/tps' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi').'/0'
										 /*--}}	
									@elseif($d_parents2->menu_file == 'master/struktur/dpd' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi')
										 /*--}}	 
									@elseif($d_parents2->menu_file == 'master/struktur/dpc' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi')
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/struktur/pac' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi')
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/struktur/par' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi')
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/struktur/kpa' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi')
										 /*--}}
									@elseif($d_parents2->menu_file == 'master/penduduk' && session('idRole') == '3')
										{{--*/ 
											$link = asset($d_parents2->menu_file).'/'.session('idProvinsi2')
										 /*--}}
									@else
										{{--*/ 
											$link = asset($d_parents2->menu_file)
										 /*--}}
									@endif 
									
									<li @if($d_parents2->menu_alias == 'belum') onclick="showAlert('danger','Peringatan !','Menu {{ $d_parents2->menu }} Belum Bisa Di Akses')" @endif  class="<?php if($url_parent == $d_parents2->menu_file){ echo 'active'; }else{ if(strpos(' '.$url_parent,$d_parents2->menu_file)) { echo 'active'; } else { echo 'non-active'; } } ?>"><a href="{{ $link }}"><i class="fa fa-circle-o"></i><span>{{ $d_parents2->menu }}</span></a></li>
								<?php }
								echo '</ul>';
							}
						?>
					</li>
                <?php }
                echo '</ul>';
              }
            ?>
        </li>
        @endforeach
    </ul>