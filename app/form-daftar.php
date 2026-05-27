<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penambahan Buku | Perpustakaan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="hero">
            <span class="badge">Tambah Data Buku</span>
            <h1>Form Penambahan Buku</h1>
            <p>Isi data buku dengan lengkap dan benar.</p>
        </div>

        <div class="card">
            <form action="proses-pendaftaran.php" method="POST">
                <p>
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" placeholder="Contoh: BK001" required>
                </p>

                <p>
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" placeholder="Masukkan judul buku" required>
                </p>

                <p>
                    <label>Pengarang Buku</label>
                    <input type="text" name="pengarang_buku" placeholder="Masukkan nama pengarang" required>
                </p>

                <p>
                    <label>Penerbit Buku</label>
                    <input type="text" name="penerbit_buku" placeholder="Masukkan nama penerbit" required>
                </p>

                <p>
                    <label>Tahun Penerbitan</label>
                    <input type="text" name="tahun_penerbitan_buku" maxlength="4" placeholder="Contoh: 2026" required>
                </p>

                <p>
                    <label>Stok Buku</label>
                    <input type="number" name="stok_buku" min="0" placeholder="Masukkan stok" required>
                </p>

                <p>
                    <input type="submit" name="simpan" value="Simpan">
                    <a class="button-secondary" href="list-buku.php">Kembali</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>