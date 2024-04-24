<?php
// Fungsi untuk menghasilkan kode berikutnya dari tabel
function kode($koneksi, $tabel, $initial){
    $query = mysqli_query($koneksi, "SELECT * FROM $tabel");
    $field = mysqli_fetch_field_direct($query, 0);
    $len = $field->length;

    $qry = mysqli_query($koneksi, "SELECT MAX(" . $field->name . ") FROM " . $tabel);
    $row = mysqli_fetch_array($qry);

    if ($row[0] == ""){
        $angka = 0;
    } else {
        $angka = substr($row[0], strlen($initial));
    }

    $angka++;
    $angka = strval($angka);
    $tmp = "";
    for ($i = 1; $i <= ($len - strlen($initial) - strlen($angka)); $i++) {
        $tmp = $tmp . "0";
    }
    return $initial . $tmp . $angka;
}

// Fungsi untuk menghasilkan nomor berikutnya dari sebuah field di tabel
function nomer($koneksi, $initial, $field, $table){
    $sql = mysqli_query($koneksi, "SELECT $field FROM $table ORDER BY $field DESC LIMIT 1") or die(mysqli_error($koneksi));
    $d = mysqli_num_rows($sql);

    if ($d > 0){
        $r = mysqli_fetch_array($sql);
        $d = $r[$field];
        $str = substr($d, 1, 4);
        $No_Urut = (int)$str;
    } else {
        $No_Urut = 0;
    }

    $No_Urut++;
    $Nol = "";
    $nilai = 4 - strlen($No_Urut);
    for ($i = 1; $i <= $nilai; $i++){
        $Nol = $Nol . "0";
    }

    $Kode = $initial . $Nol . $No_Urut;
    return $Kode;
}

// Fungsi untuk mengubah format tanggal menjadi format Indonesia
function DateToIndo($date){
    $array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus',
    'September','Oktober', 'November','Desember');

    $date = strtotime($date);
    $tanggal = date('j', $date);
    $bulan = $array_bulan[date('n', $date)];
    $tahun = date('Y', $date);

    $result = $tanggal . " " . $bulan . " " . $tahun;
    return $result;
}

// Fungsi untuk mengubah format tanggal menjadi format Indonesia
function Indo($tgl){
    $bln = explode(" ", "Januari Februari Maret April Mei Juni Juli Agsustus September Oktober November Desember");
    $tgl = explode("-", $tgl);

    if ($tgl[1] < 10) $tgl[1] = substr($tgl[1], 1, 1);

    return $tgl[2] . " " . $bln[($tgl[1] - 1)] . " " . $tgl[0];
}

// Fungsi untuk mengubah angka menjadi format mata uang Rupiah
function Rp($str){
    $jum = strlen($str);
    $jumtitik = ceil($jum / 3);
    $balik = strrev($str);

    $awal = 0;
    $akhir = 3;
    for ($x = 0; $x < $jumtitik; $x++){
        $a[$x] = substr($balik, $awal, $akhir) . ".";
        $awal += 3;
    }
    $hasil = implode($a);
    $hasilakhir = strrev($hasil);
    $hasilakhir = substr($hasilakhir, 1, $jum + $jumtitik);

    return $hasilakhir . "";
}

// Class untuk mengubah angka menjadi terbilang
class angkaTerbilang {
    function baca($n){
        $this->dasar = array(1 => 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam','tujuh', 'delapan', 'sembilan');
        $this->angka = array(1000000000, 1000000, 1000, 100, 10, 1);
        $this->satuan = array('milyar', 'juta', 'ribu', 'ratus', 'puluh', '');

        $i = 0;
        if ($n == 0){
            $str = "nol";
        } else {
            while ($n != 0){
                $count = (int)($n / $this->angka[$i]);
                if ($count >= 10){
                    $str .= $this->baca($count) . " " . $this->satuan[$i] . " ";
                } else if ($count > 0 && $count < 10){
                    $str .= $this->dasar[$count] . " " . $this->satuan[$i] . " ";
                }
                $n -= $this->angka[$i] * $count;
                $i++;
            }
            $str = preg_replace("/satu puluh (\w+)/i", "\\1 belas", $str);
            $str = preg_replace("/satu (ribu|ratus|puluh|belas)/i", "se\\1", $str);
        }
        return $str;
    }
}
?>
	