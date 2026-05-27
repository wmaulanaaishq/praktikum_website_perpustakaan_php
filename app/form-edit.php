<?php
include("../config/database.php");

if (!isset($_GET['id'])) {
    header('Location: list-buku.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE id_buku=$id LIMIT 1";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="hero">
            <span class="badge">Edit Data Buku</span>
            <h1>Form Edit Buku</h1>
            <p>Ubah data buku dengan rapi dan mudah.</p>
        </div>

        <div class="card">
            <form action="proses-edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $buku['id_buku']; ?>">

                <p>
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" value="<?php echo $buku['kode_buku']; ?>" required>
                </p>

                <p>
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" value="<?php echo $buku['judul_buku']; ?>" required>
                </p>

                <p>
                    <label>Pengarang Buku</label>
                    <input type="text" name="pengarang_buku" value="<?php echo $buku['penulis_buku']; ?>" required>
                </p>

                <p>
                    <label>Penerbit Buku</label>
                    <input type="text" name="penerbit_buku" value="<?php echo $buku['penerbit_buku']; ?>" required>
                </p>

                <p>
                    <label>Tahun Penerbitan</label>
                    <input type="text" name="tahun_penerbitan_buku" maxlength="4" value="<?php echo $buku['tahun_penerbit']; ?>" required>
                </p>

                <p>
                    <label>Stok Buku</label>
                    <input type="number" name="stok_buku" min="0" value="<?php echo $buku['Stok']; ?>" required>
                </p>

                <p>
                    <input type="submit" name="simpan" value="Simpan Perubahan">
                    <a class="button-secondary" href="list-buku.php">Kembali</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>