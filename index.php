<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="hero">
            <span class="badge">Sistem Perpustakaan</span>
            <h1>Mata Kuliah Pemrograman Web</h1>
            <p>Praktikum MySQL
                gacor.
            </p>
        </div>

        <div class="card">
            <h3>Menu Utama</h3>
            <div class="navbar">
                <a href="app/form-daftar.php">+ Daftar Buku Baru</a>
                <a href="app/list-buku.php">Lihat Katalog Buku</a>
            </div>

            <?php if (isset($_GET['status'])): ?>
                <?php if ($_GET['status'] == 'sukses'): ?>
                    <div class="alert success">Buku berhasil disimpan.</div>
                <?php else: ?>
                    <div class="alert error">Buku gagal disimpan.</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="footer">
            Praktikum MySQL • XAMPP
        </div>
    </div>
</body>
</html>