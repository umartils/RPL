<?php
	include "../config/koneksi.php";
	require ('root.php');
	$lib = new root();
	$pros=isset($_GET['pros'])?$_GET['pros']:'';
	$kode=isset($_GET['kode_user'])?$_GET['kode_user']:'';
	$kode_user=isset($_POST['kode_user'])?$_POST['kode_user']:'';
	$kode_petugas=isset($_POST['kode_petugas'])?$_POST['kode_petugas']:'';
	$level=isset($_POST['level'])?$_POST['level']:'';	
	$username=isset($_POST['username'])?$_POST['username']:'';
	$password=isset($_POST['password'])?$_POST['password']:'';
	$tgl_entri=isset($_POST['tgl_entri'])?$_POST['tgl_entri']:'';
	$nama=isset($_POST['nama'])?$_POST['nama']:'';
//$kode,$kode_user,$kode_petugas,$level,$username,$password,$tgl_entri,$nama
	switch ($pros)
	{
		case "tambah" :
			$lib->tambahuser($kode,$kode_user,$kode_petugas,$level,$username,$password,$tgl_entri,$nama);
		break;
		
		case "ubah" :
			$lib->ubahuser($kode,$kode_user,$kode_petugas,$level,$username,$password,$tgl_entri,$nama);
		break;
		
		case "hapus" :
			$lib->hapususer($kode,$kode_user,$kode_petugas,$level,$username,$password,$tgl_entri,$nama);
		break;
		
		default : break; 
	}
	
?>