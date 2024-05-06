<?php
session_start();
// include "../login/proses_login.php";
include "../config/koneksi.php";
include "../fungsi/fungsi.php";

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
$kodenya=$_GET['kode_anggota'];
$query1 = mysqli_query($koneksi,"SELECT * FROM t_anggota WHERE kode_anggota='$kodenya'");
$ubah_data = mysqli_fetch_array($query1);

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
<?php include '../tampilan/navbar.php';?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ubah Data <?= $ubah_data['nama_anggota']?></h1>
                            </div>
                            <form id="form-id" name="ubah" action="../anggota/edit_anggota.php" method="get" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="kode_anggota" class="form-control form-control-user" id="kode_anggota"
                                            value="<?= $ubah_data['kode_anggota'];?>"readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama_anggota" class="form-control form-control-user" id="nama_anggota"
                                            value="<?= $ubah_data['nama_anggota'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="telp" class="form-control form-control-user" id="telp"
                                    value="<?= $ubah_data['telp']?>">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="pekerjaan" class="form-control form-control-user" id="pekerjaan"
                                    value="<?= $ubah_data['pekerjaan']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="jenis_kelamin" class="form-control form-control-user"
                                            id="jenis_kelamin" value="<?= $ubah_data['jenis_kelamin']?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="tgl_masuk" class="form-control form-control-user"
                                            id="tgl_masuk" value="<?php echo date("Y-m-d");?>" readonly>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Ubah Data
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include '../tampilan/footer.php'; ?>

<!-- Bootstrap core JavaScript-->
    <script src="../tampilan/vendor/jquery/jquery.min.js"></script>
    <script src="../tampilan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../tampilan/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../tampilan/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../tampilan/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../tampilan/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../tampilan/js/demo/datatables-demo.js"></script>

</body>

</html>



