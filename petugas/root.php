<?php
class root
{
	private $koneksi;
	function __construct()
	{
		$this->koneksi = mysqli_connect('localhost','root','');
		mysqli_select_db($this->koneksi, 'rpl');

	}
	public function tambah($kode_user,$kode_petugas,$kode_p,$nama_petugas,$alamat_petugas,$telp,$jenis_kelamin,$u_entry,$tgl_entri)
	{
		$qtambah=mysqli_query($this->koneksi,"INSERT INTO t_petugas values('$kode_petugas','$nama_petugas','$alamat_petugas','$telp','$jenis_kelamin','$u_entry','$tgl_entri');");
		if($qtambah)
		{
			header("location:../index.php?pilih=4.7");
		}
	}
	public function edit($kode_user,$kode_petugas,$kode_p,$nama_petugas,$alamat_petugas,$telp,$jenis_kelamin,$u_entry,$tgl_entri)
	{
		$qubah=mysqli_query($this->koneksi,"UPDATE t_petugas SET nama_petugas='$nama_petugas',alamat_petugas='$alamat_petugas',no_telp='$telp',jenis_kelamin='$jenis_kelamin',u_entry='$u_entry',tgl_entri='$tgl_entri' WHERE kode_petugas='$kode_petugas'");
		if($qubah){
				header("location:../index.php?pilih=4.7");
			}else{
				echo "Edit Data Gagal!!!";
			}
	}
	public function hapus($kode_user,$kode_petugas,$kode_p,$nama_petugas,$alamat_petugas,$telp,$jenis_kelamin,$u_entry,$tgl_entri)
	{
		$qdelete=mysqli_query($this->koneksi,"DELETE FROM t_petugas WHERE kode_petugas='$kode_petugas'");
			if($qdelete){
				header("location:../index.php?pilih=4.7");
			}else{
				echo "Hapus Data Gagal!!!!";
			}
	}
}
?>