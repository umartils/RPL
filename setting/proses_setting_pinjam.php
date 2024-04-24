<?php 
	include "../config/koneksi.php";
	require ('root.php');
	$lib= new root();
	$pros=isset($_GET['pros']);
	$kode=isset($_GET['kode_jenis_pinjam']);
	
	$kode_jenis_pinjam=isset($_POST['kode_jenis_pinjam']);
	$nama_pinjaman=isset($_POST['nama_pinjaman']);
	$lama_angsur=isset($_POST['lama_angsuran']);
	$maks_pinjam=isset($_POST['maks_pinjam']);
	$u_entry=isset($_POST['u_entry']);
	$bunga=isset($_POST['bunga']);
	$c=$bunga;
	$tgl_entri=isset($_POST['tgl_entri']);
	//$kode,$kode_jenis_pinjam,$nama_pinjaman,$lama_angsur,$maks_pinjam,$u_entry,$bunga,$c,$tgl_entri
	
	switch ($pros){		
		case "tambah" :
			$lib->tambahpinjam($kode,$kode_jenis_pinjam,$nama_pinjaman,$lama_angsur,$maks_pinjam,$u_entry,$bunga,$c,$tgl_entri);
				
		break;
		
		case "ubah" :
			$lib->ubahpinjam($kode,$kode_jenis_pinjam,$nama_pinjaman,$lama_angsur,$maks_pinjam,$u_entry,$bunga,$c,$tgl_entri);
		break;		
		
		case "hapus" :
			$lib->hapuspinjam($kode,$kode_jenis_pinjam,$nama_pinjaman,$lama_angsur,$maks_pinjam,$u_entry,$bunga,$c,$tgl_entri);
		break;
		
		default : break; 
	}
	
?>