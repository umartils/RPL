<?php
	include "../config/koneksi.php";
	require ('root.php');
	$lib = new root();
	$pros=isset($_GET['pros'])?$_GET['pros']:'';
	$kode_j=isset($_GET['kode_jenis_simpan'])?$_GET['kode_jenis_simpan']:'';
	$kode_jenis_simpan=isset($_POST['kode_jenis_simpan'])?$_POST['kode_jenis_simpan']:'';
	$nama_simpanan=isset($_POST['nama_simpanan'])?$_POST['nama_simpanan']:'';
	$besar_simpanan=isset($_POST['besar_simpanan'])?$_POST['besar_simpanan']:'';
	$u_entry=isset($_POST['u_entry'])?$_POST['u_entry']:'';
	$tgl_entri=isset($_POST['tgl_entri'])?$_POST['tgl_entri']:'';
	//$kode_j,$kode_jenis_simpan,$nama_simpanan,$besar_simpanan,$u_entry,$tgl_entri
	
	switch ($pros){	
		case "tambah" :
		$lib->tambahsimpan($kode_j,$kode_jenis_simpan,$nama_simpanan,$besar_simpanan,$u_entry,$tgl_entri);
		break;	
		
		case "ubah" :
		$lib->ubahsimpan($kode_j,$kode_jenis_simpan,$nama_simpanan,$besar_simpanan,$u_entry,$tgl_entri);
		break;		
		
		case "hapus" :
		$lib->hapussimpan($kode_j,$kode_jenis_simpan,$nama_simpanan,$besar_simpanan,$u_entry,$tgl_entri);
		break;
		
		default : break; 
	}
	
?>