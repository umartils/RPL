<?php 
include 'config/koneksi.php';
include 'fungsi/fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koperasi</title>

    <!-- Custom fonts for this template-->
    <link href="../tampilan/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../tampilan/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="../tampilan/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<?php
$query = mysqli_query($koneksi, "SELECT * from t_pinjam order by kode_pinjam desc");
$data=mysqli_fetch_array($query)

?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
                    <div class="container-fluid">
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-primary">Daftar Pinjaman Anggota</h4>
                    </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th style="text-align: center;">No</th>
                                        <th>KodePinjam</th>
                                        <th>NamaAnggota</th>
                                        <th>TanggalPinjam</th>
                                        <th>TanggalTempo</th>
                                        <th>JenisPinjam</th>
                                        <th>BesarPinjam</th>
                                        <th>LamaAngsuran</th>
                                        <th>Status</th>
                                        <th style="text-align: center;" colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * from t_pinjam order by kode_pinjam desc");
                                    $no=1;
                                    while($data=mysqli_fetch_array($query)){
                                        $kd_p=$data['kode_pinjam'];
                                        $kd_a=$data['kode_anggota'];
    		                            $anggota=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama_anggota from t_anggota where kode_anggota='$kd_a'"));
    		                            $kd_j=$data['kode_jenis_pinjam'];
    		                            $jenis=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama_pinjaman from t_jenis_pinjam where kode_jenis_pinjam='$kd_j'"));
                                        $jum=mysqli_num_rows(mysqli_query($koneksi, "SELECT*from t_angsur where kode_pinjam='$kd_p' and kode_anggota='$kd_a'"));$lama=mysqli_fetch_array(mysqli_query($koneksi, "SELECT lama_angsuran from t_pinjam where kode_pinjam='$kd_p' and kode_anggota='$kd_a'"));
					                ?>
                                    <tbody>
                                        <tr>
                                        <td align="center"><?php echo $no;?></td>
                                        <td><?php echo $kd_p;?></td>
                                        <td ><?php echo $anggota['nama_anggota'];?></td>
                                        <td ><?php echo $data['tgl_entri'];?></td>
                                        <td><?php echo $data['tgl_tempo'];?></td>
                                        <td><?php echo $jenis['nama_pinjaman'];?></td>
                                        <td><?php echo number_format($data['besar_pinjam']);?></td>
                                        <td><?php echo $data['lama_angsuran'];?></td>
                                        <td><?php if($jum==$lama['lama_angsuran']){
                                            echo 'Lunas';
                                        }else{
                                            echo'Belum Lunas';
                                        }?></td>
                                        <td align="center">
                                        <a href="index1.php?pilih=2.1.1&kode_anggota=<?php echo $data['kode_anggota'];?>&kode_pinjam=<?php echo $data['kode_pinjam'];?>" class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                        </span>
                                        <span class="text">Detail</span>  
                                        </td>
                                        </tr>
                                        <?php
						$no++;} //tutup while
					?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
