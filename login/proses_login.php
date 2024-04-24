<?php
session_start();

include "../config/koneksi.php";

// Validasi input
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Preventing SQL Injection
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Query menggunakan mysqli_*
    $query = mysqli_query($koneksi, "SELECT * FROM t_user WHERE username='$username' AND password='$password'");
    $jumlah = mysqli_num_rows($query);
    $a = mysqli_fetch_array($query);

    if($jumlah > 0){
        if($a['level']=='admin' || $a['level']=='operator') {
            $_SESSION['level']=$a['level'];
            $_SESSION['kopid']=$a['kode_user'];
            $_SESSION['kopname']=$a['nama'];
            header("location:../index.php?pilih=home");
            exit(); // Penting untuk menghentikan eksekusi setelah melakukan redirect
        }
    } else {
        $error_msg = "Username atau Password Salah";
    }
}

// Jika login gagal atau jika langsung mengakses script ini, tampilkan pesan error
if(isset($error_msg)) {
?>
    <script>
        alert("<?php echo $error_msg; ?>");
        window.location="login.php";
    </script>
<?php
}
?>
