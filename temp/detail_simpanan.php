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
$kode=$_GET['kode_anggota'];
$nama = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from t_anggota where kode_anggota = '$kode'"));
$query1 = mysqli_query($koneksi, "SELECT S.*, A.nama_anggota FROM t_simpan S, t_anggota A
WHERE S.kode_anggota = A.kode_anggota AND S.kode_anggota = '$kode'");
$query = mysqli_query($koneksi, "SELECT * from t_simpan where kode_anggota='$kode'");
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
<?php include 'tampilan/navbar.php';?>
                    <div class="container-fluid">
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    
                    <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-primary">Detail Simpanan <?= $nama['nama_anggota'] ?></h4>
                        <a href="index1.php?pilih=2.2" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th style="text-align: center;">No</th>
                                        <th>Tanggal Simpanan</th>
                                        <th>Jenis Simpanan</th>
                                        <th>Besar Simpanan</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no=1;
                                    while($data=mysqli_fetch_array($query)){
					                ?>
                                    <tbody>
                                        <tr>
                                        <td align="center"><?php echo $no;?></td>
                                        <td><?php echo $data['tgl_entri'];?></td>
                                        <td><?php echo $l=$data['jenis_simpan'];?></td>
                                        <td><?php echo $data['besar_simpanan'];?></td>
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