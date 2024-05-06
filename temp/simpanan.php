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
    <link href="tampilan/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="tampilan/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="tampilan/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<?php 
$query=mysqli_query($koneksi, "SELECT * from t_anggota");
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
                        <h4 class="m-0 font-weight-bold text-primary">Daftar Simpanan</h4>
                    </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th style="text-align: center;">No</th>
                                        <th>NamaAnggota</th>
                                        <th>Pokok</th>
                                        <th>Wajib</th>
                                        <th>Sukarela</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no=1;
                                    include 'q_simpan.php';
                                    while($data=mysqli_fetch_array($query)){
                                        $kode_ang = $data['kode_anggota'];
                                        $simpan_pokok=mysqli_query($koneksi, "SELECT SUM(besar_simpanan) as pokok from t_simpan where kode_anggota='$kode_ang' and jenis_simpan='pokok'");
                                        $data_pokok = mysqli_fetch_array($simpan_pokok, MYSQLI_ASSOC);
                                        
                                        $simpan_wajib=mysqli_query($koneksi, "SELECT SUM(besar_simpanan) as wajib from t_simpan where kode_anggota='$kode_ang' and jenis_simpan='wajib'");
                                        $data_wajib = mysqli_fetch_array($simpan_wajib, MYSQLI_ASSOC);
                                        
                                        $simpan_sukarela=mysqli_query($koneksi, "SELECT SUM(besar_simpanan) as sukarela from t_simpan where kode_anggota='$kode_ang' and jenis_simpan='sukarela'");
                                        $data_sukarela = mysqli_fetch_array($simpan_sukarela, MYSQLI_ASSOC);
					                ?>
                                    <tbody>
                                        <tr>
                                        <td align="center"><?php echo $no;?></td>
                                        <td><?= $data['nama_anggota'];?></td>
                                        <td>Rp<?= isset($data_pokok['pokok'])?$data_pokok['pokok']:'0';?></td>
                                        <td>Rp<?= isset($data_wajib['wajib'])?$data_wajib['wajib']:'0';?></td>
                                        <td>Rp<?= isset($data_sukarela['sukarela'])?$data_sukarela['sukarela']:'0';?></td>
                                        <?php $total=$data_pokok['pokok']+$data_wajib['wajib']+$data_sukarela['sukarela'];?>
                                        <td>Rp. <?= $total;?></td>
                                        <td align="center">
                                        <a href="index1.php?pilih=2.2.2&kode_anggota=<?php echo $data['kode_anggota'];?>" class="btn btn-primary btn-icon-split btn-sm">
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