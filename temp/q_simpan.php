<?php
$query=mysqli_query($koneksi, "SELECT * from t_anggota");
$data = mysqli_fetch_array($query);
$kode_ang = $data['kode_anggota'];


$simpan_pokok=mysqli_query($koneksi, "SELECT SUM(besar_simpanan) as pokok from t_simpan where kode_anggota='$kode_ang' and jenis_simpan='pokok'");
$data_pokok = mysqli_fetch_array($simpan_pokok, MYSQLI_ASSOC);

$simpan_wajib=mysqli_query($koneksi, "SELECT SUM(besar_simpanan) as wajib from t_simpan where kode_anggota='$kode_ang' and jenis_simpan='wajib'");
$data_wajib = mysqli_fetch_array($simpan_wajib, MYSQLI_ASSOC);

$simpan_sukarela=mysqli_query($koneksi, "SELECT SUM(besar_simpanan) as sukarela from t_simpan where kode_anggota='$kode_ang' and jenis_simpan='sukarela'");
$data_sukarela = mysqli_fetch_array($simpan_sukarela, MYSQLI_ASSOC);
?>