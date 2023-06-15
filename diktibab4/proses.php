<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nilai = $_POST['nilai'];
    $catatan = $_POST['catatan'];
    $opsi = $_POST['opsi'];
    $nyatet = $_POST['nyatet']; 
    $kerjasama = $_POST['kerjasama'];
    $namapt = $_POST['namapt'];
    $jabatpt = $_POST['jabatpt'];
    $mitrapt = $_POST['mitrapt'];
    $jabmitpt = $_POST['jabmitpt'];
    $opsides = $_POST['opsides'];
    $catatjenis = $_POST['catatjenis'];
    $opsijenis = $_POST['opsijenis'];
    $ijazah = $_POST['ijazah'];
    $catatijazah = $_POST['catatijazah'];
    $opsiijazah = $_POST['opsiijazah'];
    $catatmitra = $_POST['catatmitra'];
    $opsimitra = $_POST['opsimitra'];
    $nialicalon = $_POST['nilaicalon'];
    $catatcalon = $_POST['catatcalon'];
    $opsicalon = $_POST['opsicalon'];
    $nilaiseleksi = $_POST['nilaiseleksi'];
    $catatseleksi = $_POST['catatseleksi'];
    $opsiseleksi = $_POST['opsiseleksi'];
    $nilaibayar = $_POST['nilaibayar'];
    $catatbayar = $_POST['catatbayar'];
    $opsibayar = $_POST['opsibayar'];
    $catatjadwal = $_POST['catatjadwal'];
    $opsijadwal = $_POST['opsijadwal'];
    $catatsurat = $_POST['catatsurat'];
    $opsisurat = $_POST['opsisurat'];
    $nilaistudi = $_POST['nilaistudi'];
    $catatstudi = $_POST['catatstudi'];
    $opsistudi = $_POST['opsistudi'];
    $moa = $_POST['moa'];
    $catatmoa = $_POST['catatmoa'];
    $opsimoa = $_POST['opsimoa'];
    // buat query
    $sql = "INSERT INTO hasil (nilai, catatan, opsi, nyatet, kerjasama, namapt, jabatpt, mitrapt, jabmitpt, opsides, catatjenis, opsijenis, ijazah, catatijazah, opsiijazah, catatmitra, opsimitra, nilaicalon, catatcalon, opsicalon, nilaiseleksi, catatseleksi, opsiseleksi, nilaibayar, catatbayar, opsibayar, catatjadwal, opsijadwal, catatsurat, opsisurat, nilaistudi, catatstudi, opsistudi, moa, catatmoa, opsimoa) VALUE ('$nilai', '$catatan', '$opsi', '$nyatet', '$kerjasama', '$namapt', '$jabatpt', '$mitrapt', '$jabmitpt', '$opsides', '$catatjenis', '$opsijenis', '$ijazah', '$catatijazah', '$opsiijazah', '$catatmitra', '$opsimitra', '$nialicalon', '$catatcalon', '$opsicalon', '$nilaiseleksi', '$catatseleksi', '$opsiseleksi', '$nilaibayar', '$catatbayar', '$opsibayar', '$catatjadwal', '$opsijadwal', '$catatsurat', '$opsisurat', '$nilaistudi', '$catatstudi', '$opsistudi', '$moa', '$catatmoa', '$opsimoa')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>if(confirm('Data Berhasil di input >_<')){document.location.href='submit.php'};</script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: bab3.html');
    }


} else {
    die("Akses dilarang...");
}

?>