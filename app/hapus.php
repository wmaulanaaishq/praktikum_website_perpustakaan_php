<?php
include("../config/database.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM buku WHERE id_buku='$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: list-buku.php?status=hapus_sukses");
    } else {
        die("Gagal menghapus data...");
    }
} else {
    die("Akses dilarang...");
}
?>