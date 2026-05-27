<?php
include("../config/database.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $kode_buku = mysqli_real_escape_string($db, $_POST['kode_buku']);
    $judul_buku = mysqli_real_escape_string($db, $_POST['judul_buku']);
    $pengarang_buku = mysqli_real_escape_string($db, $_POST['pengarang_buku']);
    $penerbit_buku = mysqli_real_escape_string($db, $_POST['penerbit_buku']);
    $tahun_penerbitan_buku = mysqli_real_escape_string($db, $_POST['tahun_penerbitan_buku']);
    $stok_buku = mysqli_real_escape_string($db, $_POST['stok_buku']);

    $sql = "UPDATE buku SET
                kode_buku='$kode_buku',
                judul_buku='$judul_buku',
                penulis_buku='$pengarang_buku',
                penerbit_buku='$penerbit_buku',
                tahun_penerbit='$tahun_penerbitan_buku',
                Stok='$stok_buku'
            WHERE id_buku='$id'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: list-buku.php");
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>