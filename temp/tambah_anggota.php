<?php
include "config/koneksi.php";
include "fungsi/fungsi.php";

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


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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
                                <h1 class="h4 text-gray-900 mb-4">Tambah Anggota</h1>
                            </div>
                            <form id="form-id" action="anggota/proses_anggota.php?pros=tambah" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama_anggota" id="nama_anggota"
                                            placeholder="Nama Lengkap">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="username" id="username"
                                            placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password" id="password"
                                        placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="telp" id="telp"
                                            placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="jenis_kelamin" id="jenis_kelamin" placeholder="Gender">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Tambah AKun
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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



