<?php
include("../config/database.php");

if (isset($_POST['simpan'])) {
    $kode_buku = mysqli_real_escape_string($db, $_POST['kode_buku']);
    $judul_buku = mysqli_real_escape_string($db, $_POST['judul_buku']);
    $pengarang_buku = mysqli_real_escape_string($db, $_POST['pengarang_buku']);
    $penerbit_buku = mysqli_real_escape_string($db, $_POST['penerbit_buku']);
    $tahun_penerbitan_buku = mysqli_real_escape_string($db, $_POST['tahun_penerbitan_buku']);
    $stok_buku = mysqli_real_escape_string($db, $_POST['stok_buku']);

    $sql = "INSERT INTO buku (kode_buku, judul_buku, penulis_buku, penerbit_buku, tahun_penerbit, Stok)
            VALUES ('$kode_buku', '$judul_buku', '$pengarang_buku', '$penerbit_buku', '$tahun_penerbitan_buku', '$stok_buku')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: ../index.php?status=sukses");
    } else {
        header("Location: ../index.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}
?>