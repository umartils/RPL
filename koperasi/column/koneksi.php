<?php
	
	$koneksi = mysqli_connect("localhost","root","") or die ("Koneksi Gagal");
	mysqli_select_db($koneksi, "rpl") or die ("Database Tidak Terakses");
?>