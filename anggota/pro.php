<?php
	include "../config/koneksi.php";
	require ('root.php');
	$lib= new root();	
	$pros=$_GET['pros'];
	$kode=$_GET['kode_anggota'];
	$kode_anggota=$_POST['kode_anggota'];
	$nama_anggota=$_POST['nama_anggota'];
	$alamat_anggota=$_POST['alamat_anggota'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$pekerjaan=$_POST['pekerjaan'];
	$tgl_masuk=$_POST['tgl_masuk'];
	$tgl_keluar=$_POST['tgl_keluar'];
	$telp=$_POST['telp'];
	$tempat_lahir=$_POST['tmp_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$photo=$_POST['photo'];
	$u_entry=$_POST['u_entry'];
	$tgl_entri=$_POST['tgl_entri'];
	//$kode_user,$kode_petugas,$kode_p,$nama_petugas,$alamat_petugas,$telp,$jenis_kelamin,$u_entry,$tgl_entri
	
	switch ($pros){
		case "tambah" :
				$lib->tambah($kode_user,$kode_anggota,$kode_p,$nama_anggota,$alamat_anggota,$telp,$jenis_kelamin,$u_entry,$tgl_entri);
		break;
		
		case "ubah" :
				$lib->edit($kode_user,$kode_anggota,$kode_p,$nama_anggota,$alamat_anggota,$telp,$jenis_kelamin,$u_entry,$tgl_entri);
		break;
		
		case "hapus" :
				$lib->hapus($kode_user,$kode_anggota,$kode_p,$nama_anggota,$alamat_anggota,$telp,$jenis_kelamin,$u_entry,$tgl_entri);
		break;
		
		default : break; 
	}
	
?>