<?php
    error_reporting(E_ALL); // Mengaktifkan error reporting
    ini_set('display_errors', TRUE); // Menampilkan error
    
    $host   = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "rpl";
    
    $koneksi = mysqli_connect($host, $user, $pass, $db); // Menggunakan mysqli_connect()
    
    if (!$koneksi){
?>
    <script language="javascript">alert("Gagal Koneksi Database MySql !!")</script>
<?php
    }
    
    
    class Tabungan{
        private $saldo;
        function __construct($a){ // Menggunakan __construct()
            $this->saldo = $a;
        }
        function simpan($sim){
            $this->saldo = $this->saldo + $sim;
        }
        function pinjam($pin){
            $this->saldo = $this->saldo - $pin;
        }
        function cek_saldo(){
            return $this->saldo;
        }
    };
?>
